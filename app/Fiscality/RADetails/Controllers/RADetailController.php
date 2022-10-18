<?php

namespace App\Fiscality\RADetails\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\RADetails\Requests\CreateRADetailRequest;
use App\Fiscality\RADetails\Requests\UpdateRADetailRequest;
use App\Fiscality\RADetails\Repositories\Interfaces\RADetailRepositoryInterface;

class RADetailController extends Controller
{
    public $raDetailRepositoryInterface;
    public function __construct(RADetailRepositoryInterface $raDetailRepositoryInterface)
    {
        $this->raDetailRepositoryInterface=$raDetailRepositoryInterface;
    }

    public function index()
    {
        return $this->raDetailRepositoryInterface->index();
    }

    public function store(CreateRADetailRequest $request)
    {
        $this->raDetailRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateRADetailRequest $request,$id)
    {
        $this->raDetailRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->raDetailRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
