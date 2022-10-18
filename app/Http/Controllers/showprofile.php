<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showprofile extends Controller
{
    public function index($show){

        return view($show);
    }
}
