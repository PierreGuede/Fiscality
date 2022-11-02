<?php

namespace App\Fiscality\TaxBases\Repositories;

use App\Fiscality\TaxBases\Repositories\Interfaces\TaxBaseRepositoryInterface;
use App\Fiscality\TaxBases\Resources\TaxBaseResource;
use App\Fiscality\TaxBases\TaxBase;
use Illuminate\Support\Str;

class TaxBaseRepository implements TaxBaseRepositoryInterface
{
    public $model;

    public $str;

    public $domain;

    public function __construct(TaxBase $model, Str $str)
    {
        $this->model = $model;
        $this->str = $str;
    }

    public function index()
    {
        $taxBase = TaxBaseResource::collection($this->model->all());

        return response()->json([
            'taxBase' => $taxBase,
        ]);
    }

    public function store(array $data): TaxBase
    {
        try {
            $taxBase = $this->model->create($data);

            return $taxBase;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $taxBase;
    }

    public function find(int $id)
    {
        try {
            $taxBase = new TaxBaseResource($this->model->findOrFail($id));

            return response()->json([
                'taxBase' => $taxBase,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): TaxBaseResource
    {
        $taxBase = $this->model->find($id);
        $taxBase->update($taxBase);

        return new TaxBaseResource($taxBase);
    }

    public function destroy($id)
    {
        $taxBase = $this->model->find($id);

        return $taxBase->delete();
    }
}
