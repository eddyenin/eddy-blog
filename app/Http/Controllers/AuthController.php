<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required', 'email', 'unique:users',
            'password' => 'required','confirmed'
        ]);

         $user = User::create($validated);

         Auth::login($user);

        return redirect()->route('posts.index');

    }

    public function login(){
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $validated = $request->validate([
            'email' => 'email',
            'password' => 'required'
        ]);

        if(Auth::attempt($validated, $request->remember)){
            $request->session()->regenerate();
            return redirect()->route('posts.index');
        }

        return back()->withErrors(['failed' => 'The provided credentials do not match our records']);

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }

}
