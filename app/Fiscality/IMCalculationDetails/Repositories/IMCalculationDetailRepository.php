<?php
namespace App\Fiscality\IMCalculationDetails\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\IMCalculationDetails\IMCalculationDetail;
use App\Fiscality\IMCalculationDetails\Repositories\Interfaces\IMCalculationDetailRepositoryInterface;

class IMCalculationDetailRepository implements IMCalculationDetailRepositoryInterface
{
    public $model,$str;
    public function __construct(IMCalculationDetail $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $imCalculation=$this->model->all();
        return view('admin.IMCalculation.index',['imCalculation'=>$imCalculation]);
    }

    public function store(array $data):IMCalculationDetail
    {
        $data->validate([
        ]);
        $standarcode=Str::slug($data['name'],'_');
        $imCalculation=$this->model->create([
            'name'=>$data['name'],
        ]);
        return $imCalculation;
        // return redirect()->route('IMCalculation.index');
    }


    public function edit(IMCalculationDetail $id)
    {
        return view('admin.IMCalculation.update',['imCalculation'=>$id]);
    }

    public function update(array $data,$id):IMCalculationDetail
    {
        $imCalculation=$this->model->find($id);
        $imCalculation->update([ 'account'=>$data['account'],
            'name'=>$data['name'],
           ]);
           return $imCalculation;
        // return redirect()->route('IMCalculation.index');
    }
    public function destroy($id)
    {
        $imCalculation = $this->model->find($id);
        dd($imCalculation);
        return $imCalculation->delete();
        // return redirect()->route('IMCalculation.index');
    }
}
