<?php

namespace App\Fiscality\TypeCompanies\Repositories\Interfaces;

use App\Fiscality\TypeCompanies\Resources\TypeCompanyResource;
use App\Fiscality\TypeCompanies\TypeCompany;

interface TypeCompanyRepositoryInterface
{
    public function index();

    public function store(array $data): TypeCompany;

    public function find(int $id);

    public function update(array $data, $id): TypeCompanyResource;

    public function destroy($id);
}
