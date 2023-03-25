<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'login' => 'required|exists:users|alpha_dash',
            'password' => 'required|min:6'
        ]);

        $user = User::where([
            'login'=> $request->login,])->first();

            if (Hash::check($request->password, $user->password)) {
                if (!$user) return response()->json([
                    'errors' => [
                        'password' => ['Неверный логин или пароль']
                    ]
                ], 422);
            }



        Auth::login($user, true);

        
        return $user;
    }

    public function register(Request $request) {
        $request->validate([
            'login' => 'required|unique:users|alpha_dash',
            'password' => 'required|min:6',
            'password_repeat' => 'required|same:password',
        ]);

        $user = User::create([
            'login'=> $request->login,
            'password'=> Hash::make($request->password),
        ]);

        Auth::login($user, true);

        return $user;
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
