<?php

namespace App\Fiscality\PrincipalActivities\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\PrincipalActivities\Requests\CreatePrincipalActivityRequest;
use App\Fiscality\PrincipalActivities\Requests\UpdatePrincipalActivityRequest;
use App\Fiscality\PrincipalActivities\Repositories\Interfaces\PrincipalActivityRepositoryInterface;

class PrincipalActivityController extends Controller
{
    public $principalActivityRepositoryInterface;
    public function __construct(PrincipalActivityRepositoryInterface $principalActivityRepositoryInterface)
    {
        $this->principalActivityRepositoryInterface=$principalActivityRepositoryInterface;
    }

    public function index()
    {
        return $this->principalActivityRepositoryInterface->index();
    }

    public function store(CreatePrincipalActivityRequest $request)
    {
        $this->principalActivityRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdatePrincipalActivityRequest $request,$id)
    {
        $this->principalActivityRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->principalActivityRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
