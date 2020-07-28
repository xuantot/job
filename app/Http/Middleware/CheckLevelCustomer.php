<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLevelCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,  $guard = null)
    {
            if(Auth::guard('customer_web')->check() && Auth::guard('customer_web')->user()->type==2){
                return $next($request);
            }elseif(Auth::guard('customer_web')->check() && Auth::guard('customer_web')->user()->type==1){
                return redirect('/');
            }else{
                return redirect('company/cms/login');
            }
    }
}
