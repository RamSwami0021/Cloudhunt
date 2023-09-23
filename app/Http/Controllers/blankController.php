<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blankController extends Controller
{
    function blank(){
        if(session()->has('email')){
            return view('dashboard/blank');
            };
            return view('login');
    }
}
