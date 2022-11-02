<?php

namespace App\Fiscality\Domains\Repositories\Interfaces;

use App\Fiscality\Domains\Domain;
use App\Fiscality\Domains\Resources\DomainResource;

interface DomainRepositoryInterface
{
    public function index();

    public function store(array $data): Domain;

    public function find(int $id);

    public function update(array $data, $id): DomainResource;

    public function destroy($id);
}
