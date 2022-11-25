<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionMidlle
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
        $pack=Subscription::where('user_id',auth()->user()->id)->first();
        if ($pack != null) {
            if ($pack->created_at->year == date('Y')) {
                return redirect()->route('company.index');
            }
            else {
                return $next($request);
            }
        }
        else {
            return null;
        }
    }
}
