<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }

    public function redirectTo()
    {
        $role = Auth::user()->role;
        switch ($role) {
            case 'admin':
                return '/admin/dashboard';
                break;
            case 'dokter':
                return '/dokter/dashboard';
                break;
            case 'pegawai':
                return '/pegawai/dashboard';
                break;
            case 'kasir':
                return '/kasir/dashboard';
                break;
            default:
                return '/';
                break;
        }
    }
}
