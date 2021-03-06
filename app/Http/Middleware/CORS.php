<?php

namespace App\Http\Middleware;

use Closure;

class CORS
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
        $resposta = $next($request);

        $resposta ->header('Acess-Control-Allow-Origin', 'http://localhost:8000')
                  ->header('Acess-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS' )
                  ->header('Acess-Control-Allow-headers', 'Authorization, Content-Type' );

                        return $resposta;
    }

}
