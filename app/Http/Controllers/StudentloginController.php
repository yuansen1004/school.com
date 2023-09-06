<?php

namespace App\Http\Controllers;

use App\Models\Studentlogin;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentloginController;
use Hash;
use Auth;
use App\Models\User;

class StudentloginController extends Controller
{
    public function studentlogin()
    {
        //dd(Hash::make(123456));
        if(!empty(Auth::check()))
        {
            return redirect('dashboardStudent');
        }

        return view('auth.studentlogin');
    }

    public function studentAuthLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email,'password' => $request -> password], $remember))
        {
            return redirect('dashboardStudent');

        }
        else
        {
            return redirect()->back()->with('error','Please enter correct email and password');
        }

    }
}
