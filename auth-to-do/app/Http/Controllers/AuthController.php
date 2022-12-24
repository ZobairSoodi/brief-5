<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function getView()
    {
        return view("login");
    }

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();
        // return $user->token;
        $google_user = User::updateOrCreate(
            ['google_id' => $user->id],
            [
                'name' => $user->name,
                'email' => $user->email,
                'google_token' => $user->token,
            ]
        );
        // return $google_user;
        Auth::login($google_user);
        return redirect('todos');
    }
}
