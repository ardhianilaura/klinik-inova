<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KasirController extends Controller
{
    public function __construct()
    {
        // Middleware untuk memastikan hanya kasir yang bisa mengakses
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (auth()->user()->role !== 'kasir') {
                return redirect('/');
            }
            return $next($request);
        });
    }

    public function index()
    {
        return view('kasir.dashboard');
    }
}
