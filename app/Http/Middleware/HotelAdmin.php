<?php

namespace App\Http\Middleware;

use Closure;
use App\Users;
use Auth;

class HotelAdmin
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

        if (Auth::user()->is_admin==true)
        {
          return $next($request);
        }
        else{
          return response()->json(['Permission denied'], 401);
        }




    }
}
