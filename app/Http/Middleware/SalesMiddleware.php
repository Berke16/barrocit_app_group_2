<?php

namespace App\Http\Middleware;

use Closure;

class SalesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_type = $request->user()->type;
        if ($user_type != 'sales' && $user_type != 'admin')
        {
            return back()->withErrors(['Permission denied!!!']);
        }

        return $next($request);
    }
}
