<?php

namespace App\Fiscality\RADetails\Repositories;

use App\Fiscality\RADetails\RADetail;
use App\Fiscality\RADetails\Repositories\Interfaces\RADetailRepositoryInterface;
use App\Fiscality\RADetails\Resources\RADetailResource;
use Illuminate\Support\Str;

class RADetailRepository implements RADetailRepositoryInterface
{
    public $model;

    public $str;

    public $domain;

    public function __construct(RADetail $model, Str $str)
    {
        $this->model = $model;
        $this->str = $str;
    }

    public function index()
    {
        $raDetail = RADetailResource::collection($this->model->all());

        return response()->json([
            'raDetail' => $raDetail,
        ]);
    }

    public function store(array $data): RADetail
    {
        try {
            $raDetail = $this->model->create($data);

            return $raDetail;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $raDetail;
    }

    public function find(int $id)
    {
        try {
            $raDetail = new RADetailResource($this->model->findOrFail($id));

            return response()->json([
                'raDetail' => $raDetail,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): RADetailResource
    {
        $raDetail = $this->model->find($id);
        $raDetail->update($raDetail);

        return new RADetailResource($raDetail);
    }

    public function destroy($id)
    {
        $raDetail = $this->model->find($id);

        return $raDetail->delete();
    }
}
