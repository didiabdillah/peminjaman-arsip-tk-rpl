<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm() {
        return view('pages.auth.login');
    }

    public function registerForm() {
        return view('pages.auth.register');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 'peminjam') {
                return redirect('/');
            }
            return redirect('/home');
        }
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'peminjam',
        ]);
        Auth::login($user);
        return redirect('/home');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}

