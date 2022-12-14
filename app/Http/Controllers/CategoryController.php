<?php

namespace App\Http\Controllers;

use App\Fiscality\Categories\Category;
use App\Fiscality\Categories\Requests\CreateCategoryRequest;
use App\Fiscality\Categories\Requests\UpdateCategoryRequest;
use App\Fiscality\DetailTypes\DetailType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();

        return view('admin.categories.index', ['category' => $category]);
    }
    public function create()
    {

        return view('admin.categories.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $upper= strtoupper($request['name']);
        $standarcode = Str::slug($upper, '_');
        $category = Category::create([
            'name' => $request['name'],
            'code' => $standarcode,
        ]);

        return redirect()->route('category.index');
    }

    public function affect(Request $request, $id)
    {
        $standarcode = rand(100000, 999999);
        $subCategory = DetailType::create([
            'name' => $request['name'],
            'category_id' => $id,
            'code' => $standarcode,
        ]);

        return redirect()->route('category.edit', $id);
    }

    public function edit(Category $id)
    {
        return view('admin.categories.update', ['category' => $id]);
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        $category=Category::find($id);
        $category->update($request->validated());
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index');
    }
}
