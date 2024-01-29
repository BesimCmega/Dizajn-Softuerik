<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\UserInterface;

class AdminRepository implements UserInterface
{
    public function indexUsers(){
        $users = User::all();
        return view('dashboards.admin.users.users_index', compact('users'));
    }

    public function editUser($id){
        $user = User::findOrFail($id);
        return view('dashboards.admin.users.editUser', compact('user'));
    }

    

}