<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        $type = Session::get('type');
        if ($type != 'admin') {
            return redirect('siswa')->withErrors(['Anda tidak memiliki fitur ini, Silakan hubungi administrator.']);
        }

        return $next($request);
    }
}
