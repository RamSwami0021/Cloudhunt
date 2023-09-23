<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class editBlogController extends Controller
{
    function editBlog($id) {
        $blog = Blog::find($id);
        if (!$blog) {
            return redirect('blogDashboard');
        }
        return view('dashboard/editBlog',compact('blog'));
    }
    function submitBlog(Request $req) {

        $blog = Blog::find($req->id);

        if (!$blog) {
            return redirect('blogDashboard');
        }
        $blog->title = $req->input('title');
        $blog->description = $req->input('description');
        $blog->save();
        return redirect('blogDashboard');
    }
}
