<?php

namespace App\Fiscality\DetailTypes\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\DetailTypes\Requests\CreateDetailTypeRequest;
use App\Fiscality\DetailTypes\Requests\UpdateDetailTypeRequest;
use App\Fiscality\DetailTypes\Repositories\Interfaces\DetailTypeRepositoryInterface;

class DetailTypeController extends Controller
{
    public $detailTypeRepositoryInterface;
    public function __construct(DetailTypeRepositoryInterface $detailTypeRepositoryInterface)
    {
        $this->detailTypeRepositoryInterface=$detailTypeRepositoryInterface;
    }

    public function index()
    {
        return $this->detailTypeRepositoryInterface->index();
    }

    public function store(CreateDetailTypeRequest $request)
    {
        $this->detailTypeRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateDetailTypeRequest $request,$id)
    {
        $this->detailTypeRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->detailTypeRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
