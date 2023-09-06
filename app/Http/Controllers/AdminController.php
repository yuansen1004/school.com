<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use mysqli;


use Hash;

class AdminController extends Controller
{

    public function list()
    {
        $data['getRecord'] = User::getRecord();
        $users = User::all(); // Retrieve all users from the 'users' table
        return view('list')->with('users', $getRecord);
    }



    public function add()
    {
        
        
        return view('add',$data);
    }

    public function insert(Request $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->email =$request->email;
        $user->password = $request->password;
        

        return redirect('list')->with('success','Admin successfully created');
    }

    public function aboutUs(){
        return view('aboutUs');
    }
}
