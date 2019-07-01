<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Customer
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
        // Check Customer role, give permission by Customer, Agent and superAdmin, otherwise give 403 error
        if (Auth::check() && Auth::user()->role == 'customer' || Auth::check() && Auth::user()->role == 'admin' || Auth::check() && Auth::user()->role == 'agent') {
            return $next($request);
        } else {
            abort(403);
        }
    }
}
