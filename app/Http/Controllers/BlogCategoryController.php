<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function getIndex(){
        $perPage = BlogCategory::count();
        if(auth()->user()->permissions()->where('name','=','view-blog-category')->first()!= null) {
            $categories =  BlogCategory::paginate($perPage);
            return view('backend.blog-category.index',compact('categories'));
        }
        return response(view('403'), 403);
    }

    public function create(){
        if(auth()->user()->permissions()->where('name','=','add-blog-category')->first()!= null) {
            $categories = BlogCategory::all();
            return view('backend.blog-category.create',compact('categories'));
        }
        return response(view('403'), 403);
    }

    public function save(Request $request){
        if(auth()->user()->permissions()->where('name','=','add-blog-category')->first()!= null) {
            $this->validate($request,[
                'title' => 'required'
            ]);
            $category = BlogCategory::firstOrCreate(['title' => $request->title]);
            $category->slug = Str::slug($request->title);
            $category->save();

            Session::flash('message','Blog category has been added');
            return redirect('blog-category');
        }
        return response(view('403'), 403);
    }

    public function edit(Request $request){
        if(auth()->user()->permissions()->where('name','=','edit-blog-category')->first()!= null) {
            $category = BlogCategory::findOrfail($request->id);
            return  view('backend.blog-category.edit',compact('category'));
        }
        return response(view('403'), 403);


    }

    public function update(Request $request){
        if(auth()->user()->permissions()->where('name','=','edit-blog-category')->first()!= null) {
            $this->validate($request,[
                'title' => 'required'
            ]);
            $category = BlogCategory::findOrfail($request->id);
            $category->title = $request->title;
            $category->slug = Str::slug($request->title);
            $category->save();
            Session::flash('message','Blog category has been updated');
            return redirect('blog-category');
        }
        return response(view('403'), 403);


    }

    public function delete(Request $request){
        if(auth()->user()->permissions()->where('name','=','delete-blog-category')->first()!= null) {
            $category = BlogCategory::findOrfail($request->id);
            if( $category->blogs->count() > 0){
                $category->blogs->delete();
            }
            $category->delete();
            Session::flash('message','Blog category has been deleted');
            return back();
        }
        return response(view('403'), 403);
    }
}
