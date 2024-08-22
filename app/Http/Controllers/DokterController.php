<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function __construct()
    {
        // Middleware untuk memastikan hanya dokter yang bisa mengakses
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (auth()->user()->role !== 'dokter') {
                return redirect('/');
            }
            return $next($request);
        });
    }

    public function index()
    {
        return view('dokter.dashboard');
    }
}
