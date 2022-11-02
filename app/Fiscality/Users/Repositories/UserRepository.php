<?php

namespace App\Fiscality\Users\Repositories;

use App\Fiscality\Users\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserRepositoryInterface
{
    private $model;

    private $typeRepo;

    public function __construct(
        User $user,
        ) {
        $this->model = $user;
    }

    public function findAll()
    {
        try {
            return $this->model->all();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function find(int $id): User
    {
        try {
            return $this->model->findOrFail($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function save(array $data): User
    {
        try {
            DB::beginTransaction();
            $user = $this->model->create($data);
            DB::commit();

            return $user;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function update(array $data, int $id): bool
    {
        try {
            $user = $this->find($id);

            return $user->update($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete(int $id): bool
    {
        try {
            $user = $this->find($id);

            return $user->delete();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
