<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $userName = $request->inputUsername;
        $userPassword = $request->inputPassword;
        if ($userName == 'admin' && $userPassword == 'admin') {
            $request->session()->push('login', true);
            return redirect()->route('show.blog');
        }
        $message = 'Login failed. Username or password is not matched!';
        $request->session()->flash('login-fail', $message);
        return view('login');
    }
}
