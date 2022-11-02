<?php

namespace App\Fiscality\IMCalculationDetails\Repositories;

use App\Fiscality\IMCalculationDetails\IMCalculationDetail;
use App\Fiscality\IMCalculationDetails\Repositories\Interfaces\IMCalculationDetailRepositoryInterface;
use App\Fiscality\IMCalculationDetails\Resources\IMCalculationDetailResource;
use Illuminate\Support\Str;

class IMCalculationDetailRepository implements IMCalculationDetailRepositoryInterface
{
    public $model;

    public $str;

    public function __construct(IMCalculationDetail $model, Str $str)
    {
        $this->model = $model;
        $this->str = $str;
    }

    public function index()
    {
        $imCalculationDetail = IMCalculationDetailResource::collection($this->model->all());

        return response()->json([
            'imCalculationDetail' => $imCalculationDetail,
        ]);
    }

    public function store(array $data): IMCalculationDetail
    {
        try {
            $imCalculationDetail = $this->model->create($data);

            return $imCalculationDetail;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $imCalculationDetail;
    }

    public function find(int $id)
    {
        try {
            $imCalculationDetail = new IMCalculationDetailResource($this->model->findOrFail($id));

            return response()->json([
                'imCalculationDetail' => $imCalculationDetail,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): IMCalculationDetailResource
    {
        $imCalculationDetail = $this->model->find($id);
        $imCalculationDetail->update($imCalculationDetail);

        return new IMCalculationDetailResource($imCalculationDetail);
    }

    public function destroy($id)
    {
        $imCalculationDetail = $this->model->find($id);

        return $imCalculationDetail->delete();
        // return redirect()->back();
    }
}
