<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        switch ($user->role) {
            case 'admin':
                return view('dashboard.admin', compact('user'));
            case 'dokter':
                return view('dashboard.dokter', compact('user'));
            case 'pegawai':
                return view('dashboard.pegawai', compact('user'));
            case 'kasir':
                return view('dashboard.kasir', compact('user'));
            default:
                return redirect()->route('login')->withErrors(['role' => 'Unauthorized role']);
        }
    }
}
