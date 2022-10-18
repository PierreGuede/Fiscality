<?php
namespace App\Fiscality\TaxBases\Repositories;

use App\Fiscality\TaxBases\Repositories\Interfaces\TaxBaseRepositoryInterface;
use Illuminate\Support\Str;
use App\Fiscality\TaxBases\TaxBase;

class TaxBaseRepository implements TaxBaseRepositoryInterface
{
    public $model,$str,$domain;
    public function __construct(TaxBase $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $taxCenter=$this->model->all();
        return view('admin.taxCenters.index',['taxCenter'=>$taxCenter]);
    }

    public function store(array $data):TaxBase
    {
        $data->validate([
        ]);
        $standarcode=$this->str->slug($data['name'],'_');
        $taxCenter=$this->model->create([
            'name'=>$data['name'],
            'address'=>$data['address'],
            'code'=>$standarcode,
        ]);
        // return redirect()->route('taxCenter.index');
        return $taxCenter;
    }


    public function edit(TaxBase $id)
    {
        return view('admin.taxCenters.update',['taxCenter'=>$id]);
    }

    public function update(array $data,$id):TaxBase
    {
        $taxCenter=$this->model->find($id);
        $taxCenter->update(['name'=>$data['name'],'address'=>$data['address'],]);
        // return redirect()->route('taxCenter.index');
        return $taxCenter;
    }
    public function destroy($id)
    {
        $taxCenter = $this->model->find($id);
        dd($taxCenter);
        return $taxCenter->delete();
        // return redirect()->route('taxCenter.index');
    }
}
