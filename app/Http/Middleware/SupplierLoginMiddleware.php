<?php

namespace App\Http\Middleware;

use Closure;
use Session;
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
class SupplierLoginMiddleware
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
       
        

        $supplierId=Session::get('supplierId');

        if($supplierId){
            
            return redirect()->route('supplierDashboard');
            
        }
        return $next($request);
    }
}
