<?php

namespace App\Http\Controllers;


use App\Models\Cv;
use App\Models\Resume;
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

    public function update(Request $request, Cv $cv) {
        // Validate the request data
        $formFields = $request->validate([
            'lookingjob' => 'required',
            'experience' => 'required',
            'education' => 'required',
            'phonenumber' => 'required',
            'document' => 'nullable|string', // Assuming 'document' is a string field
        ]);
    
        // Check if a new document is provided
        if ($request->filled('document')) {
            // If yes, update 'document' field in both the model and formFields
            $cv->update(['document' => $formFields['document']]);
        } else {
            // If no new document, remove 'document' from the formFields array
            unset($formFields['document']);
        }
    
        // Update the CV with the form fields
        $cv->update($formFields);
    
        return redirect()->route('dashboards.employee.index')->with('message', 'CV updated successfully!');
    }

    public function card1(){
        if(auth()->user()->cv){
            return view('dashboards.employee.card1');
        }else{
            return view('dashboards.employee.cv');
        }
    }

    public function card2(){
        if(auth()->user()->cv){
            return view('dashboards.employee.card2');
        }else{
            return view('dashboards.employee.cv');
        }
    }

    public function card3(){
        if(auth()->user()->cv){
            return view('dashboards.employee.card3');
        }else{
            return view('dashboards.employee.cv');
        }
    }
}
