<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class signinController extends Controller
{
    function signin(){
        if(session()->has('email')){
            return view('dashboard/signin');
        };
        return view('login');
    }
    function submitSignin(Request $request){
        $User = new User;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = $request->password;
        $currentDate = Carbon::now()->format('Y-m-d'); // Format: dd-MM-YYYY
        $blog->date = $currentDate;
        $User->save();
        return redirect('/signin');
    }
}
