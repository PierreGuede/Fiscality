<?php

namespace App\Http\Middleware;

use App\Models\Subscription;
use Closure;
use Illuminate\Http\Request;

class packMidlle
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
        return $next($request);
//        $pack=Subscription::where('user_id',auth()->user()->id)->first();
//        if ($pack != null) {
//            if ($pack->created_at->year == date('Y')) {
//                return $next($request);
//            }
//            else {
//                return redirect()->route('renew.pack');
//            }
//        }
//        else {
//            return null;
//        }
    }
}
