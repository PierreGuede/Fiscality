<?php

namespace App\Http\Middleware;

use App\Fiscality\Companies\Company;
use App\Models\CompanyUser;
use Closure;
use DB;
use Illuminate\Http\Request;

class NotAccessOtherCompanyMiddleware
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
        $id=$request->route()->parameters();
        $user=request()->user()->id;
        $company_user=DB::table('company_user')->where('user_id',$user)->where('company_id',$id['company']->id)->first();
        if ($id['company']->user_id == $user || $company_user !=null) {
            return $next($request);
        }
        else{
            return response()->view('errors.no-found-company');
        }
    }
}
