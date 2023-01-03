<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberCheck
{
    public function handle(Request $request, Closure $next)
    {
        // Tolak kalau user bukan member
        if(Auth::user()->role == 'admin'){
            return abort('401', 'User is not a member');
        }

        return $next($request);
    }
}
