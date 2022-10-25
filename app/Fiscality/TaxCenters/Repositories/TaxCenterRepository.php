<?php
namespace App\Fiscality\TaxCenters\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\TaxCenters\TaxCenter;
use App\Fiscality\TaxCenters\Resources\TaxCenterResource;
use App\Fiscality\TaxCenters\Repositories\Interfaces\TaxCenterRepositoryInterface;

class TaxCenterRepository implements TaxCenterRepositoryInterface
{
    public $model,$str,$domain;
    public function __construct(TaxCenter $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $taxBase=TaxCenterResource::collection($this->model->all());
        return response()->json([
            'taxBase'=>$taxBase
        ]);
    }

    public function store(array $data):TaxCenter
    {
        try {
            $taxBase=$this->model->create($data);
            return $taxBase;
           } catch (\Throwable $th) {
            throw $th;
           }
        return $taxBase;
    }


    public function find(int $id)
    {
        try {
            $taxBase= new TaxCenterResource($this->model->findOrFail($id));
            return response()->json([
                'taxBase'=>$taxBase
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data,$id):TaxCenterResource
    {
        $taxBase=$this->model->find($id);
        $taxBase->update($taxBase);
        return new TaxCenterResource($taxBase);
    }
    public function destroy($id)
    {
        $taxBase = $this->model->find($id);
        return $taxBase->delete();
    }
}
