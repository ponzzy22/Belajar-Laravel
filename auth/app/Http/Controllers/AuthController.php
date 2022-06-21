<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function register()
    {
        return view('auth.register');
    }


    public function postuser(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'role' => 'required',
            'email' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('login');
    }


    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect()->route('login');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
