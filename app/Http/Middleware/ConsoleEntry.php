<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class ConsoleEntry
{

    protected $auth;

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest())
            abort(403, 'Unauthorized action.');
        
        if (!$request->user()->hasRole('admin') && !$request->user()->can('enter_console')) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
