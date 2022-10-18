<?php
namespace App\Fiscality\Bases\Repositories;

use App\Fiscality\Bases\Base;
use App\Fiscality\Bases\Repositories\Interfaces\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    public function index()
    {
        $base=Base::all();
        return $base;
        // return view('admin.accounting-result.index',['base'=>$base]);
    }

    public function store(array $data):Base
    {
        // $standarcode=Str::slug($data['name'],'_');
        $base=Base::create([
            'name'=>$data['name'],
        ]);
        // return redirect()->route('accounting-result.index');
        return $base;
    }


    public function edit(Base $id)
    {
        return view('admin.accounting-result.update',['base'=>$id]);
    }

    public function update(array $data,$id):Base
    {
        $base=Base::find($id);
        $base->update(['company_id'=>$data['company_id'],
            'total_incomes'=>$data['account'],
            'total_expenses'=>$data['name'],
            'ar_value'=>$data['ar_value'],]);
        // return redirect()->route('accounting-result.index');
        return $base;

    }
    public function destroy($id)
    {
        $base = Base::find($id);
        return $base->delete();
        // return redirect()->route('accounting-result.index');
    }
}
