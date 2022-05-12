<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class UserMiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->role_as=='1')
            {
                 return $next($request);
                //return redirect('dashboard');
            }
            else{
                return redirect('/home')->with('status','Access Denied! as you are not as admin');
            }
            
        }
        else
        {
           return redirect('/')->with('status','Please login first!!');  
            
        }
      
    }
}
