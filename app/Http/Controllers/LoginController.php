<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return $this->redirectUser(Auth::user()->role);
        } else {
            return view('auth.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return $this->redirectUser($user->role);
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect()->back();
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }


    private function redirectUser($role)
    {
        switch ($role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'dokter':
                return redirect()->route('dokter.dashboard');
            case 'pegawai':
                return redirect()->route('pegawai.dashboard');
            case 'kasir':
                return redirect()->route('kasir.dashboard');
            default:
                return redirect('/');
        }
    }
}
