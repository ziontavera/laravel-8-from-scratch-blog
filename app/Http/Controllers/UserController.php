<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit-profile', ['user' => $user]);
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|password',
        ]);

        $user->update($data);

        return redirect('users')->with('success', 'User updated successfully');
    }
}
