<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {

        //validate
        $attributes = request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'confirmed', Password::min(8)->letters()],
        ]);

        //create user
        $user = User::create($attributes);

        //login the user after registering
        Auth::login($user);

        //redirect somewhere
        return redirect('/jobs');
    }
}
