<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use Carbon\Carbon;

class blogDashboardController extends Controller
{
    function blogDashboard(){
        if(session()->has('email')){
            $DataBlog = blog::all();
            return view('dashboard/blogDashboard',compact('DataBlog'));
        };
        return view('login');
    }
    // function blogDashboardForm(Request $request){
    //     $blog = new blog;
    //     $blog->title = $request->title;
    //     $blog->description = $request->description;
    //     $user = Session('name');
    //     $blog->user = $user;
    //     $blog->img = $request->img;
    //     $currentDate = Carbon::now()->format('Y-m-d'); // Format: dd-MM-YYYY
    //     $blog->date = $currentDate;

    //     $blog->save();
    //     return redirect('blogDashboard');
    // }
    public function blogDashboardForm(Request $request)
{
    $blog = new Blog();
    $blog->title = $request->title;
    $blog->description = $request->description;
    $user = Session('name');
    $blog->user = $user;

    // Handle image upload
    if ($request->hasFile('img') && $request->file('img')->isValid()) {
        $imageName = $request->file('img')->getClientOriginalExtension();

        // Generate a unique name for the image to avoid overwriting existing files
        $uniqueName = time() . '.' . $imageName;

        // Save the image to the 'blogImgUpload' folder in the 'public' directory
        $imagePath = $request->file('img')->storeAs('blogImgUpload', $uniqueName, 'public');
        $blog->image_path = $imagePath; // Store the image file path in the database
    }

    $currentDate = Carbon::now()->format('Y-m-d'); // Format: dd-MM-YYYY
    $blog->date = $currentDate;

    $blog->save();
    return redirect('blogDashboard');
}

    function deleteBlog($id) {
        $blog = blog::find($id);
        if ($blog) {
            $blog->delete();
        }
        return redirect('blogDashboard');
    }
}
