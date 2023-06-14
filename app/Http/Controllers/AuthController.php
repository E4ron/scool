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
            'login'=> $request->login,
            ])->first();
            $password = Hash::make($user->password);
            if (Hash::check($request->password,  $password)) {
                Auth::login($user, true);
                return redirect('/admin');
            } 
            else return response()->json([
                'errors' => [
                    'password' => ['Неверный логин или пароль']
                ]
            ], 422);

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
