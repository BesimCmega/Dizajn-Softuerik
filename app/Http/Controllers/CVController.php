<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    //CV Dashboard
    public function cv(){
        return view('dashboards.employee.cv');
    }
}
