<?php

namespace App\Fiscality\Bases\Repositories;

use App\Fiscality\Bases\Base;
use App\Fiscality\Bases\Repositories\Interfaces\BaseRepositoryInterface;
use App\Fiscality\Bases\Resources\BaseResource;

class BaseRepository implements BaseRepositoryInterface
{
    public $model;

    public function __construct(Base $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $base = BaseResource::collection($this->model->all());

        return response()->json([
            'base' => $base,
        ]);
        // return view('admin.accounting-result.index',['base'=>$base]);
    }

    public function store(array $data): Base
    {
        try {
            $base = $this->model->create($data);

            return $base;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function find(int $id)
    {
        try {
            return new BaseResource($this->model->findOrFail($id));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): BaseResource
    {
        $base = $this->model->find($id);
        $base->update($data);

        return new BaseResource($base);
    }

    public function destroy($id)
    {
        $base = $this->model->find($id);

        return $base->delete();
        // return redirect()->route('accounting-result.index');
    }
}
