<?php

namespace App\Fiscality\Packs\Repositories;

use App\Fiscality\Packs\Pack;
use App\Fiscality\Packs\Repositories\Interfaces\PackRepositoryInterface;
use App\Fiscality\Packs\Resources\PackResource;
use Illuminate\Support\Str;

class PackRepository implements PackRepositoryInterface
{
    public $model;

    public $str;

    public function __construct(Pack $model, Str $str)
    {
        $this->model = $model;
        $this->str = $str;
    }

    public function index()
    {
        $pack = PackResource::collection($this->model->all());

        return response()->json([
            'pack' => $pack,
        ]);
    }

    public function store(array $data): Pack
    {
        try {
            $pack = $this->model->create($data);

            return $pack;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $pack;
    }

    public function find(int $id)
    {
        try {
            $pack = new PackResource($this->model->findOrFail($id));

            return response()->json([
                'pack' => $pack,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): PackResource
    {
        $pack = $this->model->find($id);
        $pack->update($pack);

        return new PackResource($pack);
    }

    public function destroy($id)
    {
        $pack = $this->model->find($id);

        return $pack->delete();
    }
}
