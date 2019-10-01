<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Role;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function getIndex()
    {
        $roles = Role::paginate(10);
        return view('backend.role.index', compact('roles'));
    }


    public function getData(Request $request)
    {
        $roles = Role::all();
        return DataTables::of($roles)
            ->addIndexColumn()
            ->addColumn('actions', function ($q) use ($request) {
                $view = "";
                $edit = view('backend.datatable.action-edit')
                    ->with(['route' => asset('role/'.$q->id.'/edit'),'label'=>'role'])
                    ->render();
                $view .= $edit;

                $delete = view('backend.datatable.action-delete')
                    ->with(['route' => asset('role/'.$q->id),'label'=>'role'])
                    ->render();
                $view .= $delete;

                return $view;

            })
            ->rawColumns(['actions'])
            ->make();
    }


    public function create()
    {
        $permissions = Permission::all();
        return view('backend.role.create', compact('permissions'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $role = Role::firstOrCreate(['name' => $request->name]);
        if ($request->permissions != '' || $request->permissions != null) {
            $role->permissions()->sync($request->permissions);
        }
        Session::flash('message', 'Role has been added');
        return redirect('role-management');
    }

    public function delete(Request $request)
    {
        $role = Role::findOrfail($request->id);
        $role->delete();
        Session::flash('message', 'Role has been deleted');
        return back();
    }

    public function edit(Request $request)
    {
        $permissions = Permission::all();
        $role = Role::findOrfail($request->id);
        $role_permissions = $role->permissions()->pluck('id')->toArray();
        return view('backend.role.edit', compact('role', 'permissions', 'role_permissions'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $role = Role::findOrfail($request->id);
        $role->name = $request->name;
        $role->save();
        if ($request->permissions == null) {
            $role->permissions()->detach();
        } else {
            $role->permissions()->sync($request->permissions);
        }

        Session::flash('message', 'Role has been updated');
        return redirect('role-management');
    }
}
