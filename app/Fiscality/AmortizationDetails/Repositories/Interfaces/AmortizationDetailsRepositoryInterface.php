<?php

namespace App\Fiscality\AmortizationDetails\Repositories\Interfaces;

use App\Fiscality\AmortizationDetails\AmortizationDetails;

interface AmortizationDetailsRepositoryInterface
{
    public function index();

    public function store(array $data): AmortizationDetails;

    public function update(array $data, $id): AmortizationDetails;

    public function destroy($id);
}
