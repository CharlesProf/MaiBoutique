<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCheck
{
    public function handle(Request $request, Closure $next)
    {
        // Tolak kalau user itu bukan admin
        if(Auth::user()->role == 'member'){
            return abort('401', 'User is not an admin');
        }

        return $next($request);
    }
}
