<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    public function index(){

        if(Auth::check()){
            Auth::logout();
        }

        return redirect('login');
//        return view('frontend.index');
    }

    public function getSample(){

        if(Auth::check()){
            Auth::logout();
        }

        return redirect('login');
//        return view('frontend.sample');
    }
}
