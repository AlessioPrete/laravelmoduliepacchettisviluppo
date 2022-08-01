<?php

namespace alessioprete\BaseApp\app\Http\Middleware;

use Closure;

class UseAlessiopreteAuthGuardInsteadOfDefaultAuthGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        app('auth')->setDefaultDriver(config('alessioprete.base.guard'));

        return $next($request);
    }
}
