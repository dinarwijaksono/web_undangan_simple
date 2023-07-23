<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MemberOnly_middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('login-status')) {
            if (session()->get('login-status') == 'login-true') {
                return $next($request);
            }
        }
        return redirect('/Auth/login');
    }
}
