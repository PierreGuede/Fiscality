<?php

namespace App\Fiscality\TaxCenters\Repositories;

use App\Fiscality\TaxCenters\Repositories\Interfaces\TaxCenterRepositoryInterface;
use App\Fiscality\TaxCenters\Resources\TaxCenterResource;
use App\Fiscality\TaxCenters\TaxCenter;
use Illuminate\Support\Str;

class TaxCenterRepository implements TaxCenterRepositoryInterface
{
    public $model;

    public $str;

    public $domain;

    public function __construct(TaxCenter $model, Str $str)
    {
        $this->model = $model;
        $this->str = $str;
    }

    public function index()
    {
        $taxCenter = TaxCenterResource::collection($this->model->all());

        return response()->json([
            'taxCenter' => $taxCenter,
        ]);
    }

    public function store(array $data): TaxCenter
    {
        try {
            $taxCenter = $this->model->create($data);

            return $taxCenter;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $taxCenter;
    }

    public function find(int $id)
    {
        try {
            $taxCenter = new TaxCenterResource($this->model->findOrFail($id));

            return response()->json([
                'taxCenter' => $taxCenter,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): TaxCenterResource
    {
        $taxCenter = $this->model->find($id);
        $taxCenter->update($taxCenter);

        return new TaxCenterResource($taxCenter);
    }

    public function destroy($id)
    {
        $taxCenter = $this->model->find($id);

        return $taxCenter->delete();
    }
}
