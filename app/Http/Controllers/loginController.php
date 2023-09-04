<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class loginController extends Controller
{
    public function login()
    {
        return view('users.login');
    }

    public function postLogin(Request $req)
    {
        $validated = $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)){
            Session::put('email',$req->email);
            $name = User::where('email',$req->email)
                ->value('name');
            Session::put('name',$name);
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('error','Invalid Credentials');
        }
    }

    public function register()
    {
        return view('users.register');
    }

    public function registerUser(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required', 'confirmed', Password::min(8),
        ]);

        $input = $req->except('_token');
        $user = User::create([
            'name'=>$input['name'],
            'email'=>$input['email'],
            'password'=>Hash::make($input['password'])
        ]);
        Session::put('email',$input['email']);
        Session::put('name',$input['name']);
        return redirect('/dashboard');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
}
