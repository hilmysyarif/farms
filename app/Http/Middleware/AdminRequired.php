<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;

class AdminRequired
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
        if (!$request->user())
            return redirect('/login');
        if (!Admin::isAdmin($request->user()))
            return redirect('/');

        return $next($request);
    }
}
