<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
// use App\User;
use Closure;
use Illuminate\Auth\user;
use Illuminate\Support\Facades\Auth;

class AdminStaffMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role->key == 'admin') {
            return $next($request);
        }
        return redirect('/')->with('error','No tienes acceso, solo admin');

    }
}
