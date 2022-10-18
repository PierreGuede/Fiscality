<?php
namespace App\Fiscality\PrincipalActivities\Repositories;

use App\Fiscality\Domains\Domain;
use Illuminate\Support\Str;
use App\Fiscality\PrincipalActivities\PrincipalActivity;
use App\Fiscality\PrincipalActivities\Repositories\Interfaces\PrincipalActivityRepositoryInterface;

class PrincipalActivityRepository implements PrincipalActivityRepositoryInterface
{
    public $model,$str,$domain;
    public function __construct(PrincipalActivity $model, Str $str,Domain $domain)
    {
        $this->model=$model;
        $this->str=$str;
        $this->domain=$domain;
    }
    public function index()
    {
        $typeAct=$this->model->all();
        $domain=$this->domain->all();
        return view('admin.principalActivity.index',['typeAct'=>$typeAct,'domain'=>$domain]);
    }

    public function store(array $data):PrincipalActivity
    {
        $data->validate([
            'name' => ['required', 'string', 'max:255','unique:type_impots'],
        ]);
        $typeAct=$this->model->create([
            'name'=>$data['name'],
            'domain_id'=>$data['domain_id'],
        ]);
        // return redirect()->route('typeAct.index');
        return $typeAct;
    }


    public function edit(PrincipalActivity $id)
    {
        return view('admin.principalActivity.update',['typeAct'=>$id]);
    }

    public function update(array $data,$id):PrincipalActivity
    {
        $typeAct=$this->model->find($id);
        $typeAct->update(['name'=>$data['name'],]);
        // return redirect()->route('typeAct.index');
        return $typeAct;
    }
    public function destroy($id)
    {
        $typeAct = $this->model->find($id);
        dd($typeAct);
        return $typeAct->delete();
        // return redirect()->route('typeAct.index');
    }
}
