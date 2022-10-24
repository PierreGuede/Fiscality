<?php
namespace App\Fiscality\DetailTypes\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\DetailTypes\DetailType;
use App\Fiscality\DetailTypes\Repositories\Interfaces\DetailTypeRepositoryInterface;
use App\Fiscality\DetailTypes\Resources\DetailTypeResource;

class DetailTypeRepository implements DetailTypeRepositoryInterface
{
    public $model,$str;
    public function __construct(DetailType $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $detailType=DetailTypeResource::collection($this->model->all());
        return response()->json([
            'detailType'=>$detailType
        ]);
    }

    public function store(array $data):DetailType
    {

        /*
            'name'=>$data['name'],
            'code'=>$standarcode,
            'taux'=>$data['taux'],
            'description'=>$data['description'],
            'article'=>$data['article'],
            'category_id'=>$data['category_id'],
            'base_id'=>$data['base_id'],
            'type_impot_id'=>$data['type_impot_id'],
        */
        // return redirect()->route('category.index');
        try {
            $detailType=$this->model->create($data);
            return $detailType;
           } catch (\Throwable $th) {
            throw $th;
           }
        return $detailType;
    }


    public function find(int $id)
    {
        try {
            $detailType= new DetailTypeResource($this->model->findOrFail($id));
            return response()->json([
                'detailType'=>$detailType
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data,$id):DetailTypeResource
    {
        $detailType=$this->model->find($id);
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
