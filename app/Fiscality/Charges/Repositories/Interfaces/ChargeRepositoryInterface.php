<?php

namespace App\Fiscality\Charges\Repositories\Interfaces;

use App\Fiscality\Charges\Charge;

interface ChargeRepositoryInterface
{
    public function index();

    public function store(array $data): Charge;

    public function update(array $data, $id): Charge;

    public function destroy($id);
}
