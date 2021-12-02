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
        // try {
        // ddd(request()->validate([
        //     'email' => 'required'
        // ]));
        $data = request()->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|password',
        ]);
        // $data = request()->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        // ddd(request());
        $user->update($data);
        return redirect('users')->with('success', 'User updated successfully');
        // } catch (Exception $e) {
        //     ddd($e);

        //     flash()->error(trans('flash.error.generic'));
        // }
    }
}
