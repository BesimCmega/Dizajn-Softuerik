<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    // Show Register/Create Form
    public function create() {
        return view('sign-up');
    }

    //Sign-In
    public function signIn() {
        return view('sign-in');
    }

    //Employee Dashboard
    public function indexEmployee() {
        return view('dashboards.employee.index');
    }

     //Employer Dashboard
     public function indexEmployer() {
        return view('dashboards.employer.index');
    }

    //Store to Database
    public function store(Request $request) {
        $formFields = $request->validate([
            'firstname' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6'],
            'confirm-password' => ['required', 'same:password'],
            'roleId' => 'required|in:2,3'
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        if($user->roleId == 2){
            return redirect()->route('dashboards.employee.index')->with('message', 'You\'ve registered as an employee successfully!');
        }

        else if($user->roleId == 3){
            return redirect()->route('dashboards.employer.index')->with('message', 'You\'ve registered as an employer successfully!');
        }

    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }


    // Authenticate User
    // public function authenticate(Request $request) {
    //     $formFields = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => 'required'
    //     ]);

    //     if(auth()->attempt($formFields)) {

    //         $user = auth()->user();
    //         if($user->roleId == 1){
    //             return redirect()->route('dashboards.admin.index')->with('message', 'Welcome Admin!');
    //         }
    //         else if ($user->roleId == 2) {
    //             return redirect()->route('dashboards.employee.index')->with('message', 'Welcome Employee!');
    //         }
    //         else if($user->roleId == 3){
    //             return redirect()->route('dashboards.employer.index')->with('message', 'Welcome Employer!');
    //         }


    //     }

    //     return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    // }

}
