<?php

namespace App\Http\Middleware;

use Closure;
use Session;
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
class UserLoginMiddleware
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
       
         $userId=Session::get('userId');

        if($userId){
            
            return redirect()->route('userDashboard');
            
        }
        return $next($request);
    }
}
