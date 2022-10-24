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
        $category=$this->categoryRepositoryInterface->store($request->all());
        return response()->json(["category"=> $category,"message"=>"Enregistrement bien effectué"]);
    }
    public function find($id)
    {
        return $this->categoryRepositoryInterface->find($id);
    }

    public function update(UpdateCategoryRequest $request,$id)
    {
        $category=$this->categoryRepositoryInterface->update($request->all(),$id);
        return response()->json(["category"=> $category,"message"=> "Modifié avec succès"]);
    }

    public function destroy($id)
    {
        $this->categoryRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
