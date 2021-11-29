<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:4|max:50',
            'username' => 'required|min:4|max:50|unique:users,username',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|min:8|max:32'
        ]);

        $user = User::create($data);

        Auth::login($user);

        return redirect('/')->with('success', 'Account has been created. ');
    }
}
