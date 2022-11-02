<?php

namespace App\Fiscality\PackUsers\Repositories\Interfaces;

use App\Fiscality\PackUsers\PackUser;

interface PackUserRepositoryInterface
{
    public function index();

    public function store(array $data): PackUser;

    public function update(array $data, $id): PackUser;

    public function destroy($id);
}
