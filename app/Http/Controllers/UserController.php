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

        return redirect('/')->with('message', 'User created');
    }

    //Sign-In
    public function signIn() {
        return view('sign-in');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {

            $user = auth()->user();
            if($user->roleId('1')){
                return redirect()->route('dashboards.admin.index_admin')->with('message', 'Welcome Admin!');
            }
            else if ($user->roleId('2')) {
                return redirect()->route('dashboards.employee.index_employee')->with('message', 'Welcome Employee!');
            }
            else if($user->roleId('3')){
                return redirect()->route('dashboards.employer.index_employer')->with('message', 'Welcome Employer!');
            }
           
            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

}
