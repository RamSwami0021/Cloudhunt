<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class indexController extends Controller
{
    function index(){
        $blogData = \DB::table('blogs')->get();
        return view('index', compact('blogData'));
    }
}
