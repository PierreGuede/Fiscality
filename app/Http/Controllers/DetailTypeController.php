<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Fiscality\Bases\Base;
use App\Fiscality\Categories\Category;
use App\Fiscality\TypeImpots\TypeImpot;
use App\Fiscality\DetailTypes\DetailType;

class DetailTypeController extends Controller
{
    public function index()
    {
        $subCategory=DetailType::with('category')->get();
        $category_id=Category::all();
        $base_id=Base::all();
        $type_impot_id=TypeImpot::all();
        return view('admin.detailType.index',['subCategory'=>$subCategory,'category_id'=>$category_id,'base_id'=>$base_id,'type_impot_id'=>$type_impot_id]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:type_impots'],
        ]);
        $standarcode=Str::slug($request['name'].'_'.$request['type_impot_id'],'_');
        $subCategory=DetailType::create([
            'name'=>$request['name'],
            'code'=>$standarcode,
            'taux'=>$request['taux'],
            'description'=>$request['description'],
            'article'=>$request['article'],
            'category_id'=>$request['category_id'],
            'base_id'=>$request['base_id'],
            'type_impot_id'=>$request['type_impot_id'],
        ]);
        return redirect()->route('category.index');
    }


    public function edit(DetailType $id)
    {
        return view('admin.detailType.update',['subCategory'=>$id]);
    }

    public function update(Request $request,$id)
    {
        $subCategory=DetailType::find($id);
        $subCategory->update(['name'=>$request['name'],]);
        return redirect()->route('subCategory.index');
    }
    public function destroy($id)
    {
        $subCategory = DetailType::find($id);
        $subCategory->delete();
        return redirect()->back();
    }
}
