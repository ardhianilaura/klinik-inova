<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            switch ($user->role) {
                case 'admin':
                    return redirect()->route('dashboard.admin');
                case 'dokter':
                    return redirect()->route('dashboard.dokter');
                case 'pegawai':
                    return redirect()->route('dashboard.pegawai');
                case 'kasir':
                    return redirect()->route('dashboard.kasir');
                default:
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['role' => 'Unauthorized role']);
            }
        }

        return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    // Memproses logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

