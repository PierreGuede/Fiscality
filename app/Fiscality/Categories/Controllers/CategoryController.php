<?php

namespace App\Fiscality\Categories\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fiscality\Categories\Category;
use App\Fiscality\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Fiscality\Categories\Requests\CreateCategoryRequest;
use App\Fiscality\Categories\Requests\UpdateCategoryRequest;
use App\Fiscality\DetailTypes\DetailType;

class CategoryController extends Controller
{
    public $categoryRepositoryInterface;
    public function __construct(CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        $this->categoryRepositoryInterface=$categoryRepositoryInterface;
    }

    public function index()
    {
        return $this->categoryRepositoryInterface->index();
    }

    public function store(CreateCategoryRequest $request)
    {
        $this->categoryRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateCategoryRequest $request,$id)
    {
        $this->categoryRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->categoryRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
