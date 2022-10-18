<?php
namespace App\Fiscality\TypeImpots\Repositories;

use App\Fiscality\TypeImpots\Repositories\Interfaces\TypeImpotRepositoryInterface;
use Illuminate\Support\Str;
use App\Fiscality\TypeImpots\TypeImpot;

class TypeImpotRepository implements TypeImpotRepositoryInterface
{
    public $model,$str,$domain;
    public function __construct(TypeImpot $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $typeImpot=$this->model->all();
        return view('admin.typeImpots.index',['typeImpot'=>$typeImpot]);
    }

    public function store(array $data):TypeImpot
    {
        $standarcode=$this->str->slug($data['name'],'_');
        $typeImpot=$this->model->create([
            'name'=>$data['name'],
            'code'=>$standarcode,
        ]);
        // return redirect()->route('typeImpot.index');
        return $typeImpot;
    }


    public function edit(TypeImpot $id)
    {
        return view('admin.typeImpots.update',['typeImpot'=>$id]);
    }

    public function update(array $data,$id):TypeImpot
    {
        $typeImpot=$this->model->find($id);
        $typeImpot->update(['name'=>$data['name'],]);
        // return redirect()->route('typeImpot.index');
        return $typeImpot;
    }
    public function destroy($id)
    {
        $typeImpot = $this->model->find($id);
        return $typeImpot->delete();
        // return redirect()->route('typeImpot.index');
    }
}
