<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function __construct()
    {
        // Middleware untuk memastikan hanya pegawai yang bisa mengakses
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (auth()->user()->role !== 'pegawai') {
                return redirect('/');
            }
            return $next($request);
        });
    }

    public function index()
    {
        return view('pegawai.dashboard');
    }
}
