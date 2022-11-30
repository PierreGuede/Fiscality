<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmailVerifyMiddleware
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
        $user = $request->user();
        if ($user->email_verified_at != null) {
            return $next($request);
        } else {
            notify()->error('Vous n\'avez pas encore confirmé votre mail. Vérifiez votre addresse mail pour confirmer');
            auth()->logout();

            return redirect()->route('login');
        }
    }
}
