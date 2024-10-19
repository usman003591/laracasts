<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {

        //validate
        request()->validate([

        ]);
        //create user

        //login

        //redirect somewhere
    }
}
