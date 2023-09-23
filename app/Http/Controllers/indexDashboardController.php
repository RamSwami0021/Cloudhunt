<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexDashboardController extends Controller
{
    function indexDashboard(){
        if(session()->has('email')){
        return view('dashboard/indexDashboard');
        };
        return view('login');
    }
}
