<?php

namespace App\Http\Controllers;


use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{
    //CV Dashboard
    public function cv(){
        return view('dashboards.employee.cv');
    }

     //Create CV
     public function createCV(){
        return view('dashboards.employee.createCV');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'lookingjob' => 'required',
            'experience' => 'required',
            'education' => 'required',
            'phonenumber' => 'required',
            'document' => 'required'

        ]);

        // Check if there is an authenticated user
       // Check if the user is authenticated
       if (Auth::check()) {
        // Use the authenticated user's ID for 'userid'
        $formFields['userid'] = Auth::id();

        // Create the CV
        Cv::create($formFields);

        return redirect()->route('dashboards.employee.index')->with('message', 'CV created successfully!');
            }

    // If not authenticated, redirect to login
    return redirect()->route('dashboards.employee.cv')->with('error', 'Please log in to create a CV.');

    }

    public function edit(Cv $cv) {
        return view('dashboards.employee.editCV', compact('cv'));
    }

    public function update(Request $request,Cv $cv){
        $formFields=$request->validate([
            'lookingjob' => 'required',
            'experience' => 'required',
            'education' => 'required',
            'phonenumber' => 'required',
            'document' => 'required'
        ]);

        $cv->update($formFields);

        return to_route('dashboards.employee.index')->with('message', 'CV updated successfully!');
    }
}
