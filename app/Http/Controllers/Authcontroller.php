<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class Authcontroller extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',


        ]);

        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        return redirect('/')->with('success', 'registration successfull');


    }

    public function login()
    {
        return view('login');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $ussercredential = $request->only('email', 'password');
        if (Auth::attempt($ussercredential)) {
            return redirect('/dashboard')->with('success', 'welcome to dashboard');
        } else {
            return redirect('/login')->with('error', 'incorrect credentials');
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout(Request $request)
    {
        $request->Session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
