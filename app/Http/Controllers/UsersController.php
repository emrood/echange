<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use File;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class UsersController extends Controller
{
    public function getIndex(){
        $users = User::get();
        return view('backend.users.index',compact('users'));
    }

    public function create(){
        $roles = Role::all();
        return view('backend.users.create',compact('roles'));
    }

    public function getData(Request $request)
    {
        if($request->show_deleted == true){
            $users = User::onlyTrashed()->get();
        }else{
            $users = User::all();
        }
        return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('actions', function ($q) use ($request) {
                $view = "";

                if ($request->show_deleted == true) {
                    return view('backend.datatable.action-trashed')->with([ 'label' => 'user', 'value' => $q->id]);
                }
                else{
                    $edit = view('backend.datatable.action-edit')
                        ->with(['route' => asset('user/'. $q->id.'/edit'),'label' => 'user'])
                        ->render();
                    $view .= $edit;

                    $delete = view('backend.datatable.action-delete')
                        ->with(['route' => asset('user/' . $q->id),'label' => 'user'])
                        ->render();
                    $view .= $delete;

                    return $view;
                }


            })
            ->addColumn('role',function ($q) {
               return  $q->roles()->pluck('name')->implode(', ');
            })
            ->rawColumns(['actions','role'])
            ->make();
    }



    public function save(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6|confirmed',
//            'dob' => 'required',
//            'pic_file' => 'required',
//            'bio' => 'required',
//            'gender' => 'required',
//            'country' => 'required',
//            'state' => 'required',
//            'city' => 'required',
//            'address' => 'required',
//            'postal' => 'required',
            'role' => 'required',

        ],[
            'pic_file.required' => 'Photo de profil requise',
            'dob.required' => 'Date de naissance requise',
            'name.required' => 'Le nom est obligatoire',
            'email.required' => 'L\'adresse email est obligatoire',
            'password.required' => 'Le mot de passe est obligatoire',
        ]);
//        $user->assignRole($role->name);

        $user =  User::firstOrCreate(['name'=>$request->name,'email'=> $request->email]);
        $user->status = 1;

        $user->password = bcrypt($request->password);
        $user->save();

        if ($file = $request->file('pic_file')) {
            $extension = $file->extension()?: 'png';
            $destinationPath = public_path() . '/storage/uploads/users/';
            $safeName = Str::random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            $request['pic'] = $safeName;
        }else{
            $request['pic'] = 'no_avatar.jpg';
        }
        $profile = $user->profile;
        if($user->profile == null){
            $profile = new  Profile();
        }
        if($request->dob != null){
          $date =  Carbon::parse($request->dob)->format('Y-m-d');
        }else{
            $date = $request->dob;
        }
        $profile->user_id = $user->id;
        $profile->bio = $request->bio;
        $profile->gender = $request->gender;
        $profile->dob = $date;
        $profile->country = $request->country;
        $profile->state = $request->state;
        $profile->city = $request->city;
        $profile->address = $request->address;
        $profile->postal = $request->postal;
        $profile->phone = $request->phone;
        $profile->pic = $request['pic'];
        $profile->save();

        $role = Role::find($request->role);
        $user->assignRole($role->name);

        Session::flash('message','Utilisateur enregistré !');
        return redirect()->back();
    }

    public function edit(Request $request){
        $user = User::findOrfail($request->id);
        $roles = Role::all();
        return view('backend.users.edit',compact('user','roles'));
    }

    public function update(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
//            'dob' => 'required',
//            'bio' => 'required',
//            'gender' => 'required',
//            'country' => 'required',
//            'state' => 'required',
//            'city' => 'required',
//            'address' => 'required',
//            'postal' => 'required',
            'role' => 'required',

        ],[
            'pic_file.required' => 'Profile picture required',
            'dob.required' => 'Date of Birth required'
        ]);

        $user =  User::findOrfail($request->id);

        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();

        $profile = $user->profile;
        if($user->profile == null){
            $profile = new  Profile();
        }
        if($request->dob != null){
            $date =  Carbon::parse($request->dob)->format('Y-m-d');
        }else{
            $date = $request->dob;
        }


        if ($file = $request->file('pic_file')) {
            $extension = $file->extension()?: 'png';
            $destinationPath = public_path() . '/storage/uploads/users/';
            $safeName = Str::random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            //delete old pic if exists
            if (File::exists($destinationPath . $user->pic)) {
                File::delete($destinationPath . $user->pic);
            }
            //save new file path into db
            $profile->pic = $safeName;
        }


        $profile->user_id = $user->id;
        $profile->bio = $request->bio;
        $profile->gender = $request->gender;
        $profile->dob = $date;
        $profile->country = $request->country;
        $profile->state = $request->state;
        $profile->city = $request->city;
        $profile->address = $request->address;
        $profile->phone = $request->phone;
        $profile->postal = $request->postal;
        $profile->save();

        $role = Role::find($request->role);
        if(!$user->hasRole($role->name)){
           if($user->roles()->first() != null){
               $user->roles()->first()->pivot->delete();
           }
            $user->assignRole($role->name);
        }

        Session::flash('message','L\'utilisateur a été mis à jour');
        return redirect()->back();
    }

    public function delete($id){
       $user =  User::findOrfail($id);
       $user->delete();
       Session::flash('message','L\'utilisateur a été supprimé');
       return back();
    }

    public function destroy($id){
        $user =  User::onlyTrashed()->where('id','=',$id)->first();
        $user->forceDelete();
        Session::flash('message','L\'utilisateur a été supprimé définitivement');
        return back();
    }

    public function getDeletedUsers(){
        $users = User::onlyTrashed()->get();
        return view('backend.users.deleted',compact('users'));
    }

    public function restoreUser(Request $request){
        $user =  User::onlyTrashed()->where('id','=',$request->id);
        $user->restore();
        Session::flash('message',"L'utilisateur a été restauré");
        return back();
    }

    public function getSettings(){
        $user = auth()->user();
        return view('backend.users.account-settings',compact('user'));
    }

    public function saveSettings(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
        ]);

        $user =  auth()->user();

        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();

        $profile = $user->profile;
        if($user->profile == null){
            $profile = new  Profile();
        }
        if($request->dob != null){
            $date =  Carbon::parse($request->dob)->format('Y-m-d');
        }else{
            $date = $request->dob;
        }


        if ($file = $request->file('pic_file')) {
            $extension = $file->extension()?: 'png';
            $destinationPath = public_path() . '/storage/uploads/users/';
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            //delete old pic if exists
            if (File::exists($destinationPath . $user->pic)) {
                File::delete($destinationPath . $user->pic);
            }
            //save new file path into db
            $profile->pic = $safeName;
        }


        $profile->user_id = $user->id;
        $profile->bio = $request->bio;
        $profile->gender = $request->gender;
        $profile->dob = $date;
        $profile->country = $request->country;
        $profile->state = $request->state;
        $profile->city = $request->city;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->postal = $request->postal;
        $profile->save();

        Session::flash('message','Compte mis à jour !');
        return redirect()->back();
    }

}
