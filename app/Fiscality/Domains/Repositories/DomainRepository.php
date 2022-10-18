<?php
namespace App\Fiscality\Domains\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\Domains\Domain;
use App\Fiscality\Domains\Repositories\Interfaces\DomainRepositoryInterface;

class DomainRepository implements DomainRepositoryInterface
{
    public $model,$str;
    public function __construct(Domain $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $domain=$this->model->all();
        return view('admin.domains.index',['domain'=>$domain]);
    }

    public function store(array $data):Domain
    {
        $standarcode=$this->str->slug($data['name'],'_');
        $domain=$this->model->create([
            'name'=>$data['name'],
            'code'=>$standarcode,
        ]);
        // return redirect()->route('domain.index');
        return $domain;
    }


    public function edit(Domain $id)
    {
        return view('admin.domains.update',['domain'=>$id]);
    }

    public function update(array $data,$id):Domain
    {
        $domain=$this->model->find($id);
        $domain->update(['name'=>$data['name'],]);
        // return redirect()->route('domain.index');
        return $domain;
    }
    public function destroy($id)
    {
        $domain = $this->model->find($id);
        dd($domain);
        return $domain->delete();
        // return redirect()->route('domain.index');
    }
}
