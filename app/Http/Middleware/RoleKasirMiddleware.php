<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleKasirMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
{
    $user = $request->user();
    
    // Periksa apakah pengguna sudah login dan memiliki salah satu peran yang diizinkan
    if ($user && in_array($user->level_user, $roles)) {
        return $next($request);
    }

    // Arahkan pengguna berdasarkan peran mereka jika mereka tidak memiliki akses ke rute ini
    if ($user) {
        switch ($user->level_user) {
            case 'Admin':
                return redirect('/admin/dashboard');
            case 'Bartender':
                return redirect('/bartender/dashboard');
            case 'Kasir':
                return redirect('/kasir/main');
            case 'Pelayan':
                return redirect('/pelayan/main');
            default:
                return redirect('/');
        }
    }

    // Jika pengguna tidak login, arahkan ke halaman utama
    return redirect('/');
}

}
