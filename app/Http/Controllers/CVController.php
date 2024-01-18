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
            'testimonial' => 'required',
            'celebrity_Name' => 'required'

        ]);
        CV::create($formFields);
        return to_route('dashboards.aboutus.testimonials.testimonials_index')->with('message', 'Testimonial created successfully!');
    }
}
