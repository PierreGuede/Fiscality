<?php

namespace App\Fiscality\Amortizations\Repositories;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Amortizations\Repositories\Interfaces\AmortizationRepositoryInterface;

class AmortizationRepository implements AmortizationRepositoryInterface
{
    public $model;

    public function __construct(Amortization $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $amortisation = $this->model->all();

        return $amortisation;
    }

    public function store(array $data): Amortization
    {
        try {
            $amortisation = $this->model->create($data);

            return $amortisation;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit(Amortization $id)
    {
    }

    public function update(array $data, $id): Amortization
    {
        try {
            $amortisation = $this->model->find($id);
            $amortisation->update($data);

            return $amortisation;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
    }
}
