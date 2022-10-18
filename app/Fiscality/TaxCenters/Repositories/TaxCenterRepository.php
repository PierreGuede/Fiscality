<?php
namespace App\Fiscality\TaxCenters\Repositories;

use App\Fiscality\TaxCenters\Repositories\Interfaces\TaxCenterRepositoryInterface;
use Illuminate\Support\Str;
use App\Fiscality\TaxCenters\TaxCenter;

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
        $taxCenter=$this->model->all();
        return view('admin.taxCenters.index',['taxCenter'=>$taxCenter]);
    }

    public function store(array $data):TaxCenter
    {
        $data->validate([
            'name' => ['required', 'string', 'max:255','unique:tax_centers'],
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


    public function edit(TaxCenter $id)
    {
        return view('admin.taxCenters.update',['taxCenter'=>$id]);
    }

    public function update(array $data,$id):TaxCenter
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
