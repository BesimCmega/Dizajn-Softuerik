<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;

class CVController extends Controller
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
        CV::create($formFields);
        return to_route('dashboards.employee.index')->with('message', 'CV created successfully!');
    }
}
