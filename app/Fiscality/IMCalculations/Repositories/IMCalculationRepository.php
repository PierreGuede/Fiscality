<?php

namespace App\Fiscality\IMCalculations\Repositories;

use App\Fiscality\IMCalculations\IMCalculation;
use App\Fiscality\IMCalculations\Repositories\Interfaces\IMCalculationRepositoryInterface;
use App\Fiscality\IMCalculations\Resources\IMCalculationResource;
use Illuminate\Support\Str;

class IMCalculationRepository implements IMCalculationRepositoryInterface
{
    public $model;

    public $str;

    public function __construct(IMCalculation $model, Str $str)
    {
        $this->model = $model;
        $this->str = $str;
    }

    public function index()
    {
        $imCalculation = IMCalculationResource::collection($this->model->all());

        return response()->json([
            'imCalculation' => $imCalculation,
        ]);
    }

    public function store(array $data): IMCalculation
    {
        try {
            $imCalculation = $this->model->create($data);

            return $imCalculation;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $imCalculation;
    }

    public function find(int $id)
    {
        try {
            $imCalculation = new IMCalculationResource($this->model->findOrFail($id));

            return response()->json([
                'imCalculation' => $imCalculation,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): IMCalculationResource
    {
        $imCalculation = $this->model->find($id);
        $imCalculation->update($imCalculation);

        return new IMCalculationResource($imCalculation);
    }

    public function destroy($id)
    {
        $imCalculation = $this->model->find($id);

        return $imCalculation->delete();
        // return redirect()->back();
    }
}
