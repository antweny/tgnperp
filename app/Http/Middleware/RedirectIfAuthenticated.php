<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    //  Handle an incoming request.
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect(RouteServiceProvider::ADMIN);
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect(RouteServiceProvider::DASHBOARD);
                }
                break;
        }
        return $next($request);
    }
}
