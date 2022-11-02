<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return response()->json(['message' => 'Votre adresse e-mail est vérifiée']);
    }
}
