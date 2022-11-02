<?php

namespace App\Fiscality\TaxCenters\Repositories\Interfaces;

use App\Fiscality\TaxCenters\Resources\TaxcenterResource;
use App\Fiscality\TaxCenters\TaxCenter;

interface TaxCenterRepositoryInterface
{
    public function index();

    public function store(array $data): TaxCenter;

    public function find(int $id);

    public function update(array $data, $id): TaxcenterResource;

    public function destroy($id);
}
