<?php

namespace App\Http\Middleware;

use Closure;
use Auth, Session;

class Admin
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
        // get the authenticated user Auth::user()->admin
        // if auth user not admin
        if(!Auth::user()->admin)
        {
            Session::flash('info', 'You don\'t have permission to perform this action.');

            return redirect()->back();
        }

        return $next($request);
    }
}
