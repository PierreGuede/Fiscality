<?php
namespace App\Fiscality\RADetails\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\RADetails\RADetail;
use App\Fiscality\RADetails\Repositories\Interfaces\RADetailRepositoryInterface;

class RADetailRepository implements RADetailRepositoryInterface
{
    public $model,$str,$domain;
    public function __construct(RADetail $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $raDetail=$this->model->all();
        return view('admin.RADetail.index',['raDetail'=>$raDetail]);
    }

    public function store(array $data):RADetail
    {
        $data->validate([
            'name' => ['required', 'string', 'max:255','unique:type_impots'],
        ]);
        $standarcode=$this->str->slug($data['name'],'_');
        $raDetail=$this->model->create([
            'account'=>$data['account'],
            'name'=>$data['name'],
            'amount'=>$data['amount'],
            'type'=>$data['type'],
            'accounting_result_id'=>$data['accounting_result_id'],
            'company_id'=>$data['company_id'],
            'code'=>$data['code'],
        ]);
        // return redirect()->route('RADetail.index');
        return $raDetail;
    }


    public function edit(RADetail $id)
    {
        return view('admin.RADetail.update',['raDetail'=>$id]);
    }

    public function update(array $data,$id):RADetail
    {
        $raDetail=$this->model->find($id);
        $raDetail->update([ 'account'=>$data['account'],
            'name'=>$data['name'],
            'amount'=>$data['amount'],
            'type'=>$data['type'],
            'accounting_result_id'=>$data['accounting_result_id'],
            'company_id'=>$data['company_id'],
            'code'=>$data['code'],]);
        // return redirect()->route('RADetail.index');
        return $raDetail;
    }
    public function destroy($id)
    {
        $raDetail = $this->model->find($id);
        dd($raDetail);
        return $raDetail->delete();
        // return redirect()->route('RADetail.index');
    }

}
