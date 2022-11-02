<?php

namespace App\Fiscality\Categories\Repositories;

use App\Fiscality\Categories\Category;
use App\Fiscality\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Fiscality\Categories\Resources\CategoryResource;
use App\Fiscality\DetailTypes\DetailType;
use Illuminate\Support\Str;

class CategoryRepository implements CategoryRepositoryInterface
{
    public $model;

    public $detailType;

    public $str;

    public function __construct(Category $model, DetailType $detailType, Str $str)
    {
        $this->model = $model;
        $this->detailType = $detailType;
        $this->str = $str;
    }

    public function index()
    {
        try {
            $category = CategoryResource::collection($this->model->all());

            return response()->json([
                'categories' => $category,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(array $data): Category
    {
        $category = $this->model->create($data);

        return $category;
    }

    public function find(int $id)
    {
        try {
            $category = new CategoryResource($this->model->findOrFail($id));

            return response()->json([
                'category' => $category,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id)
    {
        $category = $this->model->find($id);
        $category->update($data);

        return new CategoryResource($category);
    }

    public function destroy($id)
    {
        $category = $this->model->find($id);

        return $category->delete();
        // return redirect()->route('category.index');
    }
}
