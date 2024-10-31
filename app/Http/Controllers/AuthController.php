<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman registrasi
    public function registerform()
    {
        return view('auth.register');
    }

    // Menangani registrasi pengguna
    public function register(Request $request)
    {
        $validatedData=$request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:12',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);
        // dd('Validation passed');
        $validatedData['password']=bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('message', 'Registration successful! Please log in.');
    }

    // Menampilkan halaman login
    public function Loginform()
    {
        return view('auth.login');
    }

    // Menangani login pengguna
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login berhasil, arahkan ke dashboard
            return redirect()->intended('dashboard');
        }

        // Login gagal, kembalikan ke halaman login dengan pesan error
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    // Menangani logout pengguna
    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/beranda');
    }
}
