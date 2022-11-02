<?php

namespace App\Fiscality\TypeImpots\Repositories;

use App\Fiscality\TypeImpots\Repositories\Interfaces\TypeImpotRepositoryInterface;
use App\Fiscality\TypeImpots\Resources\TypeImpotResource;
use App\Fiscality\TypeImpots\TypeImpot;
use Illuminate\Support\Str;

class TypeImpotRepository implements TypeImpotRepositoryInterface
{
    public $model;

    public $str;

    public $domain;

    public function __construct(TypeImpot $model, Str $str)
    {
        $this->model = $model;
        $this->str = $str;
    }

    public function index()
    {
        $typeImpot = TypeImpotResource::collection($this->model->all());

        return response()->json([
            'typeImpot' => $typeImpot,
        ]);
    }

    public function store(array $data): TypeImpot
    {
        try {
            $typeImpot = $this->model->create($data);

            return $typeImpot;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $typeImpot;
    }

    public function find(int $id)
    {
        try {
            $typeImpot = new TypeImpotResource($this->model->findOrFail($id));

            return response()->json([
                'typeImpot' => $typeImpot,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): TypeImpotResource
    {
        $typeImpot = $this->model->find($id);
        $typeImpot->update($typeImpot);

        return new TypeImpotResource($typeImpot);
    }

    public function destroy($id)
    {
        $typeImpot = $this->model->find($id);

        return $typeImpot->delete();
    }
}
