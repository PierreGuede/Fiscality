<?php

namespace App\Fiscality\Users\Repositories\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    public function findAll();

    public function find(int $id): User;

    public function save(array $data): User;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
