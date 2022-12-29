<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCheck
{
    public function handle(Request $request, Closure $next)
    {
        // Check kalo user udah login dan bukan admin
        if(Auth::user()->role == 'admin'){
            return abort('401', 'Admin is not authorized nor logged in');
        }

        return $next($request);
    }
}
