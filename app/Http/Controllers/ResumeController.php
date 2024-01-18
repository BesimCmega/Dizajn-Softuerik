<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

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
            'phonenumber' => 'required',

        ]);
        Resume::create($formFields);
        return to_route('dashboards.employer.index')->with('message', 'Resume created successfully!');
    }
}
