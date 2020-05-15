<?php

namespace App\Http\Middleware;

use Closure;

class factorcheck
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
        if(session('factor_id')!=null)
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('/Address');
        }
        abort(403);
    }
}
