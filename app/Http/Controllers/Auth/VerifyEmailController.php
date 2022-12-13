<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, $id, string $hash)
    {
        $user = User::whereId($id)->first();

        if (! hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            notify()->success('Invalid');

            return redirect()->route('login');
        }

        if ($user->hasVerifiedEmail()) {
//            return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
            return redirect()->route('login');
        }

        if ($user->markEmailAsVerified()) {
            notify()->success('Email vérifié avec succès!');
            event(new Verified($user));

            return redirect()->route('login');
        }

//        return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }
}
