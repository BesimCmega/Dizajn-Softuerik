<?php

namespace App\Http\Controllers;

use App\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller implements UserInterface
{
    

    public function indexAdmin() {
        return view('dashboards.admin.index');
    }

    public function indexUsers(){
        $users = User::all();
        return view('dashboards.admin.users.users_index', compact('users'));
    }

    // Show Create Form
    public function createUser() {
        return view('dashboards.admin.users.create');
    }
    
    
    public function editUser($id){
        $user = User::findOrFail($id);
        return view('dashboards.admin.users.editUser', compact('user'));
    }
    
    
    public function destroy(User $user){
        if ($user->roleId == 1) {
            return back()->with('message', 'you are admin.');
        }
        $user->delete();
        
        return back()->with('message', 'User deleted.');
    }

    // public function show(User $user){
    // return view('dashboards.admin.users.users_index', compact('user'));
    // }

    //Store to Database
    public function storeinAdmin(Request $request) {
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
        

        return to_route('dashboards.admin.users.users_index')->with('message', 'User created successfully!');
        
    }

    //Update to Database
    public function update(Request $request, User $user) {
        
        if($request->input('roleId') == 2 && $user->resume){
            $user->resume->delete();
        }

        if($request->input('roleId') == 3 && $user->cv){
            $user->cv->delete();
        }
   

        $formFields = $request->validate([
            'firstname' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
            'confirm-password' => ['required', 'same:password'],
            'roleId' => 'required|in:2,3'
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        

        // Create User
        $user->update($formFields);

        return to_route('dashboards.admin.users.users_index')->with('message', 'User updated successfully!');
        
    }
}
