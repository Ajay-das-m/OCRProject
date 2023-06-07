<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;
class CheckUserIsLoggedIn
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
        if(!auth()->check()){
            return redirect()->route('login.user');
         
           }
        else{
            return $next($request);
        }
        
    }
}
