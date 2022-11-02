<?php

namespace App\Fiscality\DetailTypes\Repositories\Interfaces;

use App\Fiscality\DetailTypes\DetailType;
use App\Fiscality\DetailTypes\Resources\DetailTypeResource;

interface DetailTypeRepositoryInterface
{
    public function index();

    public function store(array $data): DetailType;

    public function find(int $id);

    public function update(array $data, $id): DetailTypeResource;

    public function destroy($id);
}
