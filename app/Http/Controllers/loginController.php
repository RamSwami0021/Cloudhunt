<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    function login(){
        return view('login');
    }
    function submitLogin(Request $req){
        // return redirect('indexDashboard');
        $data = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $data['email'])->first();
        
        if (($user['email']==$data['email']) && ($user['password']==$data['password'])) {
            $req->session()->put('id', $user->id);
            $req->session()->put('email', $user->email);
            $req->session()->put('name', $user->name);
    
            return redirect('indexDashboard');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
