<?php

namespace App\Http\Middleware\frontend;

use Closure;
use Illuminate\Http\Request;

class CustomerAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('CUSTOMER_ID')) {
           return redirect('login');
        }
        return $next($request);
    }
}
