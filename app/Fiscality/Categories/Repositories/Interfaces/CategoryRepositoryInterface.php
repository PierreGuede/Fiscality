<?php

namespace App\Fiscality\Categories\Repositories\Interfaces;

use App\Fiscality\Categories\Category;

interface CategoryRepositoryInterface
{
    public function index();

    public function store(array $data): Category;

    public function find(int $id);

    public function update(array $data, $id);

    public function destroy($id);
}
