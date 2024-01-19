<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    
    // Show Edit User Form
    public function edit(User $user) {
        return view('dashboards.admin.users.edit', compact('user'));
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

    public function show(User $user){
    return view('dashboards.admin.users.users_index', compact('user'));
    }
}
