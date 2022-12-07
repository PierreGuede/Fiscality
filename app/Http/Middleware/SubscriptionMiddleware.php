<?php

namespace App\Http\Middleware;

use App\Models\Subscription;
use Carbon\Carbon;
use Closure;
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
<<<<<<< HEAD
        $subscription = Subscription::whereUserId(is_null(auth()->user()->user_id) ? auth()->user()->id : auth()->user()->user_id)->whereYear('created_at', Carbon::now()->year)->first();
        if ($subscription != null) {
            return $next($request);
        } else {
=======
        $subscription  = Subscription::whereUserId( is_null(auth()->user()->user_id) ?  auth()->user()->id :auth()->user()->user_id )/* ->whereYear('created_at', Carbon::now()->year) */->first();
        $old_subscription  = Subscription::whereUserId( is_null(auth()->user()->user_id) ?  auth()->user()->id :auth()->user()->user_id )->first();
        if ($subscription != null) {
            // dd($subscription->created_at->year);
            if ($subscription->created_at->year == date("Y")) {
                if ( $request->route()->getName()=== 'renew.pack') {
                    dd('ok');
                    # code...
                }
                else {
                    // return $next($request);
                }
            }
            else{
                return redirect()->route('renew.pack');
            }
        }
       /*  if ($subscription != null) {
            if ( $request->route()->getName()=== 'renew.pack' ) {
                return redirect()->back();
            }
            else {
                return $next($request);
            }
        }
        // elseif ($old_subscription !=null) {
        //     return redirect()->route('renew.pack');
        // }
        else {
>>>>>>> feat/lastModify
            notify()->error('Erreur', 'Votre abonnement est expiré');
            redirect()->route('login');
        }
        */

    }
}
