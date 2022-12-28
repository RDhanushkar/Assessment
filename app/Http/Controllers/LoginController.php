<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Validator;
use Auth;

class LoginController extends Controller
{
    //
    function index()
    {
        return view('login');
    }
    function checklogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|alphaNum|min:5'
        ]);
        $user_data = array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
        );
        if(Auth::attempt($user_data))
        {
            return view('admin.dashboard');
        }
        else{
            return back()->with('message','wrong Email address or Password');
        }
    }

    function men()
    {
        return view('admin.men');
    }
    function dash()
    {
        return view('admin.dashboard');
    }
    function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
