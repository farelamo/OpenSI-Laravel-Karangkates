<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role === 'admin'){
            alert()->warning('Maaf', 'Anda bukan user');
            return back();
        }
        return $next($request);
    }
}
