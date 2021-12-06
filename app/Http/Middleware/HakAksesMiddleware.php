<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class HakAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ... $roles)
    {
       
        if(Auth::check()) {
            if (Auth::user()->hasRole('superAdmin')){
                return $next($request); // pass the admin
            }
            foreach($roles as $role) {
                // Check if user has the role This check will depend on how your roles are set up
                if(Auth::user()->hasRole($role))
                    return $next($request);
            }
            abort(403, 'Akses ditolak');
            // return redirect('/'); // not admin. redirect wherever you like
        }
        return redirect('/login');

    }
}
