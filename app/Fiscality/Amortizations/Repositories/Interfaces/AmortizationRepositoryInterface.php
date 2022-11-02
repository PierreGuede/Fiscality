<?php

namespace App\Fiscality\Amortizations\Repositories\Interfaces;

use App\Fiscality\Amortizations\Amortization;

interface AmortizationRepositoryInterface
{
    public function index();

    public function store(array $data): Amortization;

    public function update(array $data, $id): Amortization;

    public function destroy($id);
}
