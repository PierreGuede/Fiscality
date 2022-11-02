<?php

namespace App\Fiscality\IMCalculationDetails\Repositories\Interfaces;

use App\Fiscality\IMCalculationDetails\IMCalculationDetail;
use App\Fiscality\IMCalculationDetails\Resources\IMCalculationDetailResource;

interface IMCalculationDetailRepositoryInterface
{
    public function index();

    public function store(array $data): IMCalculationDetail;

    public function find(int $id);

    public function update(array $data, $id): IMCalculationDetailResource;

    public function destroy($id);
}
