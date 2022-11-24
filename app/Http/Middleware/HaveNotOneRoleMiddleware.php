<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HaveNotOneRoleMiddleware
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
        $user = request()->user();
       $role= \DB::table('model_has_roles')->where('model_id',$user->id)->first();
        if ($role != null) {
            abort(403, 'Vous avez deja un role et une entreprise');
        } else {
            return $next($request);
        }
    }
}
