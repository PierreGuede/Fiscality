<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Fiscality\Categories\Category;
use App\Fiscality\DetailTypes\DetailType;

class CategoryController extends Controller
{
    public function index()
    {
        $category=Category::all();
        return view('admin.categories.index',['category'=>$category]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:type_impots'],
        ]);
        $standarcode=Str::slug($request['name'],'_');
        $category=Category::create([
            'name'=>$request['name'],
            'code'=>$standarcode,
        ]);
        return redirect()->route('category.index');
    }

    public function affect(Request $request,$id)
    {
        $standarcode=rand(100000,999999);
        $subCategory=DetailType::create([
            'name'=>$request['name'],
            'category_id'=>$id,
            'code'=>$standarcode,
        ]);
        return redirect()->route('category.edit',$id);
    }
    public function edit(Category $id)
    {
        return view('admin.categories.update',['category'=>$id]);
    }

    public function update(Request $request,$id)
    {
        $category=Category::find($id);
        $category->update(['name'=>$request['name'],]);
        return redirect()->route('category.index');
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
