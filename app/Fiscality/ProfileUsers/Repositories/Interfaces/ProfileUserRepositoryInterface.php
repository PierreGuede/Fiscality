<?php

namespace App\Fiscality\ProfileUsers\Repositories\Interfaces;

use App\Fiscality\ProfileUsers\ProfileUser;
use App\Fiscality\ProfileUsers\Resources\ProfileUserResource;

interface ProfileUserRepositoryInterface
{
    public function index();

    public function store(array $data): ProfileUser;

    public function find(int $id);

    public function update(array $data, $id): ProfileUserResource;

    public function destroy($id);
}
