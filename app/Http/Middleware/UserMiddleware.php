<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        $type = Session::get('type');
        if ($type != 'student') {
            return redirect('home')->withErrors(['Anda tidak memiliki fitur ini, Silakan hubungi administrator.']);
        }

        return $next($request);
    }
}
