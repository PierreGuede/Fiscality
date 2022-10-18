<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Fiscality\IMItems\IMItem;

class IMItemController extends Controller
{
    public function index()
    {
        $imItem=IMItem::all();
        return view('admin.IMItem.index',['imItem'=>$imItem]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:type_impots'],
        ]);
        $standarcode=Str::slug($request['name'],'_');
        $imItem=IMItem::create([
            'name'=>$request['name'],
            'base_id'=>$request['base_id'],
        ]);
        return redirect()->route('IMItem.index');
    }


    public function edit(IMItem $id)
    {
        return view('admin.IMItem.update',['imItem'=>$id]);
    }

    public function update(Request $request,$id)
    {
        $imItem=IMItem::find($id);
        $imItem->update(['name'=>$request['name'],
        'base_id'=>$request['base_id'],]);
        return redirect()->route('IMItem.index');
    }
    public function destroy($id)
    {
        $imItem = IMItem::find($id);
        dd($imItem);
        $imItem->delete();
        return redirect()->route('IMItem.index');
    }

}
