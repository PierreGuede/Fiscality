<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionMiddleware
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
       $subscription  = Subscription::whereUserId( is_null(auth()->user()->user_id) ?  auth()->user()->id :auth()->user()->user_id )->whereYear('created_at', Carbon::now()->year)->first();
        if ($subscription != null) {
           return $next($request);
        }
        else {
            notify()->error('Erreur', 'Votre abonnement est expiré');
            redirect()->route('login');
        }
    }
}
