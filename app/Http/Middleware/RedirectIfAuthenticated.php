<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param     \Illuminate\Http\Request; $request
     * @param      \Closure&nbsp; $next
     * @param&nbsp; string|null; $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect()->route('admin-index'); //name of the route to be redirected on successful admin login
        }
        if ($guard == "enseignant" && Auth::guard($guard)->check()) {
            return redirect()->route('admin-index'); //name of the route to be redirected on successful admin login
        }
        if ($guard == "atos" && Auth::guard($guard)->check()) {
            return redirect()->route('admin-index'); //name of the route to be redirected on successful admin login
        }
        if (Auth::guard($guard)->check()) {
            return redirect()->route('user-index'); //name of the route to be redirected on successful user login
        }
        return $next($request);
    }
}
