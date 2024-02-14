<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => ['required'],
            'username' => ['required', Rule::unique('users', 'username')],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => ['required'],
        ]);

        $user = User::create($attributes); 

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
