<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCheck
{
    public function handle(Request $request, Closure $next)
    {
        // Check kalo user udah login dan admin
        if(Auth::user()->role == 'user'){
            return abort('401', 'User is not admin nor logged in');
        }

        return $next($request);
    }
}
