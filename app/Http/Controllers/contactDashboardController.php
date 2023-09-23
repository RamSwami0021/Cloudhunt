<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactDashboardController extends Controller
{
    function contactDashboard(){
        if(session()->has('email')){
            $DataContact = contact::all();
            return view('dashboard/contactDashboard',compact('DataContact'));
            // return view('dashboard/contactDashboard');
        };
        return view('login');
    }
}
