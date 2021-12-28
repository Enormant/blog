<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth() -> guest()) {
            
            abort(HttpResponse::HTTP_FORBIDDEN);   
        }
        if(auth() -> user() -> email != 'swayamsiddha7@gmail.com') 
        { 
            abort(HttpResponse::HTTP_FORBIDDEN);  
        }

        return $next($request);
    }
}