<?php
namespace App\Fiscality\Auth\Repositories;

use App\Models\User;
use App\Exceptions\CustomException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\UltimateException;
use App\Fiscality\Users\Resources\MeResource;
use App\Fiscality\Auth\Repositories\Interfaces\AuthRepositoryInterface;
use App\Fiscality\Users\Repositories\Interfaces\UserRepositoryInterface;

class AuthRepository implements AuthRepositoryInterface
{

    private $userRepo;

    public function __construct(
        UserRepositoryInterface $userRepo
    )
    {
        $this->userRepo = $userRepo;
    }

    public function register(): User
    {
        try {
            $user = $this->userRepo->save(request()->all());
            return $user;
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            throw new UltimateException("Impossible de s'inscrire pour le moment", 400);
        }
    }

    public function login(): array
    {
        try {
            $remember = request()->remember ?? false;

            if(!Auth::attempt(request()->only(['username','email','password']) , $remember)){
                throw new CustomException("Le nom d'utilisateur ou l'adresse e-mail ou le mot de passe est invalide");
            }

            $user = Auth::user();
            $token = $user->createToken('main')->plainTextToken;

            return [
                'token' => $token
            ];
        }
        catch (CustomException $th) {
            Log::error($th->error_message());
			throw new  UltimateException($th->error_message(), 400);
        }
        catch (\Throwable $th) {
            Log::error($th->getMessage());
            throw new UltimateException("Impossible de se connecter pour le moment", 401);
        }
    }

    public function me(): array
    {
        try {
            $user = $this->userRepo->find(request()->user()->id);
            $profile = $user->getAccount();
            return [
                "user" => new MeResource($user),
                "type_Account" => $profile
            ];
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            throw new UltimateException("Impossible de recuperer l'utilisateur", 400);
        }
    }
}
