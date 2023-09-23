<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\user;
use League\Csv\Writer;

class usersController extends Controller
{
    function users(Request $request){
        if(session()->has('email')){
            if(($request->input('start_date'))&&($request->input('end_date'))) {
                $startDate = $request->input('start_date');
                $endDate = $request->input('end_date');

                $DataUser = User::whereBetween('date', [$startDate, $endDate])->get();
                return view('dashboard/users',compact('DataUser'));
            } else {
                $DataUser = User::all();
                return view('dashboard/users',compact('DataUser'));
            }
        };
        return view('login');
    }
    public function downloadCSV(Request $request)
{
    // Decode the data from the query parameter
    $encodedData = $request->query('data');
    $filteredBlogs = json_decode(base64_decode($encodedData), true);

    // Create a new CSV instance
    $csv = Writer::createFromString('');
    $csv->insertOne(['name', 'email', 'password', 'date']);

    foreach ($filteredBlogs as $blog) {
        // Adjust this line to match the actual fields in the User model
        $csv->insertOne([$blog['name'], $blog['email'], $blog['password'], $blog['date']]);
    }

    // Set the CSV response headers
    $headers = [
        'Content-Type'        => 'text/csv',
        'Content-Disposition' => 'attachment; filename="filtered_data.csv"',
    ];

    // Send the CSV file as a response
    return Response::make($csv->toString(), 200, $headers);
}

}
