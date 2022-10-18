<?php
namespace App\Fiscality\DetailTypes\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\DetailTypes\DetailType;
use App\Fiscality\DetailTypes\Repositories\Interfaces\DetailTypeRepositoryInterface;

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
        $subCategory=$this->model->with('category')->get();
        $category_id=Category::all();
        $base_id=Base::all();
        $type_impot_id=TypeImpot::all();
        return view('admin.detailType.index',['subCategory'=>$subCategory,'category_id'=>$category_id,'base_id'=>$base_id,'type_impot_id'=>$type_impot_id]);
    }

    public function store(array $data):DetailType
    {
        $data->validate([
            'name' => ['required', 'string', 'max:255','unique:type_impots'],
        ]);
        $standarcode=$this->str->slug($data['name'].'_'.$data['type_impot_id'],'_');
        $detailTypeQuery=$this->model->create([
            'name'=>$data['name'],
            'code'=>$standarcode,
            'taux'=>$data['taux'],
            'description'=>$data['description'],
            'article'=>$data['article'],
            'category_id'=>$data['category_id'],
            'base_id'=>$data['base_id'],
            'type_impot_id'=>$data['type_impot_id'],
        ]);
        // return redirect()->route('category.index');
        return $detailTypeQuery;
    }


    public function edit(DetailType $id)
    {
        return view('admin.detailType.update',['subCategory'=>$id]);
    }

    public function update(array $data,$id):DetailType
    {
        $detailTypeQuery=$this->model->find($id);
        $detailTypeQuery->update(['name'=>$data['name'],]);
        // return redirect()->route('detailTypeQuery.index');
        return $detailTypeQuery;
    }
    public function destroy($id)
    {
        $detailTypeQuery = $this->model->find($id);
        return $detailTypeQuery->delete();
        // return redirect()->back();
    }
}
