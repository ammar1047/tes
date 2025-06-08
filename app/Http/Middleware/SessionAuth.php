<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionAuth
{
    public function handle($request, Closure $next)
{
    if (!session()->has('user')) {
        return redirect('/login');
    }

    return $next($request);
}

}

