<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoggedCheck
{
    public function handle(Request $request, Closure $next)
    {
        // Tolak kalau user belum login
        if(! Auth::check()){
            return abort('401', 'User is not logged in');
        }

        return $next($request);
    }
}
