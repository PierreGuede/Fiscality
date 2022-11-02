<?php

namespace App\Fiscality\Bases\Repositories\Interfaces;

use App\Fiscality\Bases\Base;
use App\Fiscality\Bases\Resources\BaseResource;

interface BaseRepositoryInterface
{
    public function index();

    public function store(array $data): Base;

    public function find(int $id);

    public function update(array $data, $id): BaseResource;

    public function destroy($id);
}
