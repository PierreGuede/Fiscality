<?php
namespace App\Fiscality\IMItems\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\IMItems\IMItem;
use App\Fiscality\IMItems\Repositories\Interfaces\IMItemRepositoryInterface;
use App\Fiscality\IMItems\Resources\IMItemResource;

class IMItemRepository implements IMItemRepositoryInterface
{
    public $model,$str;
    public function __construct(IMItem $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $imItem=IMItemResource::collection($this->model->all());
        return response()->json([
            'imItem'=>$imItem
        ]);
    }

    public function store(array $data):IMItem
    {
        try {
            $imItem=$this->model->create($data);
            return $imItem;
           } catch (\Throwable $th) {
            throw $th;
           }
        return $imItem;
    }


    public function find(int $id)
    {
        try {
            $imItem= new IMItemResource($this->model->findOrFail($id));
            return response()->json([
                'imItem'=>$imItem
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data,$id):IMItemResource
    {
        $imItem=$this->model->find($id);
        $imItem->update($imItem);
        return new IMItemResource($imItem);
    }
    public function destroy($id)
    {
        $imItem = $this->model->find($id);
        return $imItem->delete();
        // return redirect()->back();
    }
}
