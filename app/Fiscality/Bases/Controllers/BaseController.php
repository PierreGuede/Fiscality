<?php

namespace App\Fiscality\Bases\Controllers;

use App\Fiscality\Bases\Repositories\Interfaces\BaseRepositoryInterface;
use App\Fiscality\Bases\Requests\CreateBaseRequest;
use App\Fiscality\Bases\Requests\UpdateBaseRequest;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $baseRepositoryInterface;
    public function __construct(BaseRepositoryInterface $baseRepositoryInterface)
    {
        $this->baseRepositoryInterface = $baseRepositoryInterface;
    }

    public function index()
    {
        return $this->baseRepositoryInterface->index();
    }

    public function store(CreateBaseRequest $request)
    {
        $this->baseRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateBaseRequest $request,$id)
    {
        $this->baseRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->baseRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
