<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(request('API_PASSWOED') !== env('API_PASSWOED', 'p5xgeTG9ObZT6m4R')){
            return response()->json(['massage'=>'Unauthenticated']);
        }
        return $next($request);
    }
}
