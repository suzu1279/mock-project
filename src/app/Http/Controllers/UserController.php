<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Item;
use illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }


    public function showRegistrationForm()
    {
       return view('register');
    }


    public function confirm()
    {
        return view('edit');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request ->validated();

        User::create([
            'name' => $data['name'],
            'email' =>$data['email'],
            'password' => ($data['password']),
            'confirmPassword' =>$data['confirmPassword'],
        ]);

        return redirect('/');
    }

    public function login(LoginRequest $request)
    {
        $data = $request -> validated();

        return redirect('/');
    }
}
