<?php

namespace App\Http\Middleware;

use Closure;

class DeniedIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard='customer_user')
    {
        if(! \Auth::guard($guard)->check()){
            abort(463);
        }
        return $next($request);
    }
}
