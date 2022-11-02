<?php

namespace App\Fiscality\IMItems\Repositories\Interfaces;

use App\Fiscality\IMItems\IMItem;
use App\Fiscality\IMItems\Resources\IMItemResource;

interface IMItemRepositoryInterface
{
    public function index();

    public function store(array $data): IMItem;

    public function find(int $id);

    public function update(array $data, $id): IMItemResource;

    public function destroy($id);
}
