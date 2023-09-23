<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{
    function blog(){
        $blogData = blog::all();
        return view('blog',compact('blogData'));
    }
}
