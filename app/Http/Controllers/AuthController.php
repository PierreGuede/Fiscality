<?php

namespace App\Http\Controllers;

use App\Fiscality\Auth\Repositories\Interfaces\AuthRepositoryInterface;
use App\Fiscality\Users\Requests\LoginRequest;
use App\Fiscality\Users\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authRepo;

    public function __construct(AuthRepositoryInterface $authRepo)
    {
        $this->authRepo = $authRepo;
    }

    /**
     * It creates a user and sends a verification email to the user's email address
     *
     * @param RegisterRequest request The request object.
     */
    public function register(RegisterRequest $request)
    {
        $registerd = $this->authRepo->register();

        return response()->json(['message' => 'registered']);
    }

    /**
     * It validates the request, checks if the user exists, if the user exists, it creates a token for
     * the user and returns the user and the token
     *
     * @param Request request The request object.
     * @return The user and the token
     */
    public function login(LoginRequest $request)
    {
        $logged = $this->authRepo->login();

        return response()->json($logged);
    }

    /**
     * It logs out the user.
     */
    public function me()
    {
        $logged = $this->authRepo->me();

        return response()->json($logged);
    }

    /**
     * It logs out the user.
     */
    public function logout()
    {
        auth()->logout();
    }
}
