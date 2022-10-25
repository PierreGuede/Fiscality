<?php
namespace App\Fiscality\TypeCompanies\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\TypeCompanies\TypeCompany;
use App\Fiscality\TypeCompanies\Resources\TypeCompanyResource;
use App\Fiscality\TypeCompanies\Repositories\Interfaces\TypeCompanyRepositoryInterface;

class TypeCompanyRepository implements TypeCompanyRepositoryInterface
{
    public $model,$str,$domain;
    public function __construct(TypeCompany $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $typeCompany=TypeCompanyResource::collection($this->model->all());
        return response()->json([
            'typeCompany'=>$typeCompany
        ]);
    }

    public function store(array $data):TypeCompany
    {
        try {
            $typeCompany=$this->model->create($data);
            return $typeCompany;
           } catch (\Throwable $th) {
            throw $th;
           }
        return $typeCompany;
    }


    public function find(int $id)
    {
        try {
            $typeCompany= new TypeCompanyResource($this->model->findOrFail($id));
            return response()->json([
                'typeCompany'=>$typeCompany
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data,$id):TypeCompanyResource
    {
        $typeCompany=$this->model->find($id);
        $typeCompany->update($typeCompany);
        return new TypeCompanyResource($typeCompany);
    }
    public function destroy($id)
    {
        $typeCompany = $this->model->find($id);
        return $typeCompany->delete();
    }
}
