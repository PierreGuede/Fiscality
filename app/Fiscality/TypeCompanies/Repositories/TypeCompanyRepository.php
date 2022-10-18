<?php
namespace App\Fiscality\TypeCompanies\Repositories;

use App\Fiscality\TypeCompanies\Repositories\Interfaces\TypeCompanyRepositoryInterface;
use Illuminate\Support\Str;
use App\Fiscality\TypeCompanies\TypeCompany;

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
        $type=$this->model->all();
        $impot=TypeImpot::all();
        return view('admin.typesCompanies.index',['type'=>$type,'impot'=>$impot]);
    }

    public function store(array $data):TypeCompany
    {
        $data->validate([
        'name' => ['required', 'string', 'max:255','unique:type_impots'],
    ]);
    $standarcode=$this->str->slug($data['name'],'_');
    $type=$this->model->create([
            'name'=>$data['name'],
            'code'=>$standarcode,
        ]);
        $type->impot()->sync($data['impot_id']);
        // return redirect()->route('type.index');
        return $type;
    }


    public function edit(TypeCompany $id)
    {
        return view('admin.typesCompanies.update',['type'=>$id]);
    }

    public function update(array $data,$id):TypeCompany
    {
        $type=$this->model->find($id);
        $type->update(['name'=>$data['name'],]);
        // return redirect()->route('type.index');
        return $type;
    }
    public function destroy($id)
    {
        $type = $this->model->find($id);
        return $type->delete();
        // return redirect()->route('type.index');
    }
}
