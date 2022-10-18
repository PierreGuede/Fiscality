<?php
namespace App\Fiscality\IMItems\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\IMItems\IMItem;
use App\Fiscality\IMItems\Repositories\Interfaces\IMItemRepositoryInterface;

class IMItemRepository implements IMItemRepositoryInterface
{
    public $model,$str;
    public function __construct(IMItem $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $imItem=$this->model->all();
        return view('admin.IMItem.index',['imItem'=>$imItem]);
    }

    public function store(array $data):IMItem
    {
        $data->validate([
        ]);
        $standarcode=$this->str->slug($data['name'],'_');
        $imItem=$this->model->create([
            'name'=>$data['name'],
            'base_id'=>$data['base_id'],
        ]);
        return $imItem;
        // return redirect()->route('IMItem.index');
    }


    public function edit(IMItem $id)
    {
        return view('admin.IMItem.update',['imItem'=>$id]);
    }

    public function update(array $data,$id):IMItem
    {
        $imItem=$this->model->find($id);
        $imItem->update(['name'=>$data['name'],
        'base_id'=>$data['base_id'],]);
        // return redirect()->route('IMItem.index');
        return $imItem;
    }
    public function destroy($id)
    {
        $imItem = $this->model->find($id);
        dd($imItem);
        return $imItem->delete();
        // return redirect()->route('IMItem.index');
    }
}
