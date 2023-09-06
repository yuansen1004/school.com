<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function login()
    {
        //dd(Hash::make(123456));
        if(!empty(Auth::check()))
        {
            return redirect('dashboard');
        }

        return view('auth.login');
    }

    public function AuthLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email,'password' => $request -> password], $remember))
        {
            return redirect('dashboard');

        }
        else
        {
            return redirect()->back()->with('error','Please enter correct email and password');
        }

    }

    public function forgotpassword()
    {
        return view('auth.forgot');
    }
    public function PostForgotPassword(Request $request)
    {
        
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}
