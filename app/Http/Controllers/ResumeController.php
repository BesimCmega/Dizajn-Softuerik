<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    //Resume Dashboard
    public function resume(){
        return view('dashboards.employer.resume');
    }

     //Create Resume
     public function createResume(){
        return view('dashboards.employer.createResume');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'company' => 'required',
            'education' => 'required',
            'skills' => 'required',
            'workExperience' => 'required',
            'phoneNumber' => 'required',

        ]);

        if (Auth::check()) {
            // Use the authenticated user's ID for 'userid'
            $formFields['userid'] = Auth::id();
    
            // Create the CV
            Resume::create($formFields);
    
            return redirect()->route('dashboards.employer.index')->with('message', 'Resume created successfully!');
        }
    }
}
