<?php
namespace App\Fiscality\Categories\Repositories;

use App\Fiscality\Categories\Category;
use App\Fiscality\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Fiscality\DetailTypes\DetailType;
use Illuminate\Support\Str;

class CategoryRepository implements CategoryRepositoryInterface
{
    public $model,$detailType,$str;
    public function __construct(Category $model,DetailType $detailType, Str $str)
    {
        $this->model=$model;
        $this->detailType=$detailType;
        $this->str=$str;
    }
    public function index()
    {
        $category=$this->model->all();
        return view('admin.categories.index',['category'=>$category]);
    }

    public function store(array $data):Category
    {
        $standarcode=$this->str->slug($data['name'],'_');
        $category=$this->model->create([
            'name'=>$data['name'],
            'code'=>$standarcode,
        ]);
        // return redirect()->route('category.index');
        return $category;
    }

    public function affect(array $data,$id)
    {
        $standarcode=rand(100000,999999);
        $subCategory=$this->detailType->create([
            'name'=>$data['name'],
            'category_id'=>$id,
            'code'=>$standarcode,
        ]);
        return redirect()->route('category.edit',$id);
    }
    public function edit(Category $id)
    {
        return view('admin.categories.update',['category'=>$id]);
    }

    public function update(array $data,$id):Category
    {
        $category=$this->model->find($id);
        $category->update(['name'=>$data['name'],]);
        // return redirect()->route('category.index');
        return $category;
    }
    public function destroy($id)
    {
        $category = $this->model->find($id);
        return $category->delete();
        // return redirect()->route('category.index');
    }
}
