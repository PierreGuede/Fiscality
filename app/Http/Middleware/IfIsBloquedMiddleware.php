<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Fiscality\Companies\Company;

class IfIsBloquedMiddleware
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
        $user=request()->user();
        $company=Company::whereNull('company_id')->where('user_id',$user->id)->first();
        /* if ($user->hasAnyRole(['cabinet', 'enterprise'])) {
            if ($company->is_active == 1) {
               return view('auth.bloqued');
            }
            else {
                return $next($request);
            }
        } else {
            return $next($request);
        } */
        if ( $user->hasAnyRole(['cabinet', 'enterprise']) && $company->status == "rejected"){

            return view('auth.bloqued');
        }
        else{
            return $next($request);
        }
    }
}
