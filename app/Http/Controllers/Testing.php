<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testing extends Controller
{
    public function index(){
        $name = 'hady mohamed';
        return view('welcome' , compact('name'));
    }
}
