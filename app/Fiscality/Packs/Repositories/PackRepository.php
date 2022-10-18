<?php
namespace App\Fiscality\Packs\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\Packs\Pack;
use App\Fiscality\Packs\Repositories\Interfaces\PackRepositoryInterface;

class PackRepository implements PackRepositoryInterface
{
    public $model,$str;
    public function __construct(Pack $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $pack=$this->model->all();
        return view('admin.packs.index',['pack'=>$pack]);
    }

    public function store(array $data):Pack
    {
        $data->validate([
        ]);
        $pack=$this->model->create([
            'name'=>$data['name'],
            'description'=>$data['description'],
            'max'=>$data['max'],
        ]);
        // return redirect()->route('pack.index');
        return $pack;
    }


    public function edit(Pack $id)
    {
        return view('admin.packs.update',['pack'=>$id]);
    }

    public function update(array $data,$id):Pack
    {
        $pack=$this->model->find($id);
        $pack->update(['name'=>$data['name'],
        'description'=>$data['description'],
        'max'=>$data['max'],]);
        return $pack;
        // return redirect()->route('pack.index');
    }
    public function destroy($id)
    {
        $pack = $this->model->find($id);
        dd($pack);
        return $pack->delete();
        // return redirect()->route('pack.index');
    }
}
