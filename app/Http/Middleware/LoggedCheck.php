<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoggedCheck
{
    public function handle(Request $request, Closure $next)
    {
        // Check kalo user udah login dan admin
        if(!Auth::check()){
            return abort('401', 'User is not admin nor logged in');
        }

        return $next($request);
    }
}
