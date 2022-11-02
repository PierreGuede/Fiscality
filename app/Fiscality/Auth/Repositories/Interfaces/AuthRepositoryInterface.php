<?php

namespace App\Fiscality\Auth\Repositories\Interfaces;

use App\Models\User;

interface AuthRepositoryInterface
{
    public function register(): User;

    public function login(): array;

    public function me(): array;
}
