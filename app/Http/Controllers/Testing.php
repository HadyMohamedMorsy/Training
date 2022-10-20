<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Testing extends Controller
{

    public function index(){

        if (Auth::check()) {
            // The user is logged in...
            return view('Home.index');
        }else{
            return view('auth.login');
        }

        
    }
}
