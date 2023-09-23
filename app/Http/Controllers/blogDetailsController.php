<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogDetailsController extends Controller
{
    function blogDetails($id){
        $blogData = \DB::table('blogs')->where('id', $id)->first();
        return view('blogDetails', compact('blogData'));
    }
    
}
