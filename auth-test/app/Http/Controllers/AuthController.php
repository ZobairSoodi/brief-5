<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_form(){
        return view('form');
    }

    public function login(Request $req){
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // return $credentials;
        if(Auth::attempt($credentials)){
            return redirect()->intended('/');
        }
        return back();
    }
}
