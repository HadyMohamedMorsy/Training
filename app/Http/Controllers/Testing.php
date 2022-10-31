<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Testing extends Controller
{

    public function index(){

        return view('auth.login');
    }
}
