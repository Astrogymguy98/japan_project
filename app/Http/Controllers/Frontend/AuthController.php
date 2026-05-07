<?php

namespace App\Http\Controllers\Frontend;
use Laravel\Socialite\Socialite;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login()
    {
        return Socialite::driver('google')->redirect();
    }

    public function redirect()
    {
        $google_user = Socialite::driver('google')->user();
        $old_user = User::where('email', $google_user->email)->first();

        if ($old_user) {
            Auth::login($old_user);
            return redirect()->route('home');
        }

        $new_user = new User();
        $new_user->forceFill([
            'email' => $google_user->email,
            'name' => $google_user->name,
            'password' => Hash::make(rand(111, 999)),
        ]);
        $new_user->save();

        Auth::login($new_user);
        return redirect()->route('home');
    }
}
