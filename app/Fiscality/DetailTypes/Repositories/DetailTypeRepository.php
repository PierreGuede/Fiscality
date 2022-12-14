<?php

namespace App\Fiscality\DetailTypes\Repositories;

use App\Fiscality\DetailTypes\DetailType;
use App\Fiscality\DetailTypes\Repositories\Interfaces\DetailTypeRepositoryInterface;
use App\Fiscality\DetailTypes\Resources\DetailTypeResource;
use Illuminate\Support\Str;

class DetailTypeRepository implements DetailTypeRepositoryInterface
{
    public $model;

    public $str;

    public function __construct(DetailType $model, Str $str)
    {
        $this->model = $model;
        $this->str = $str;
    }

    public function index()
    {
        $detailType = DetailTypeResource::collection($this->model->all());

        return response()->json([
            'detailType' => $detailType,
        ]);
    }

    public function store(array $data): DetailType
    {
        try {
            $detailType = $this->model->create($data);

            return $detailType;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $detailType;
    }

    public function find(int $id)
    {
        try {
            $detailType = new DetailTypeResource($this->model->findOrFail($id));

            return response()->json([
                'detailType' => $detailType,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): DetailTypeResource
    {
        $detailType = $this->model->find($id);
        $detailType->update($detailType);

        return new DetailTypeResource($detailType);
    }

    public function destroy($id)
    {
        $detailType = $this->model->find($id);

        return $detailType->delete();
        // return redirect()->back();
    }
}
