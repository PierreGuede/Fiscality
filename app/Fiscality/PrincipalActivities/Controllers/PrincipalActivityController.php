<?php

namespace App\Fiscality\PrincipalActivities\Controllers;

use App\Fiscality\PrincipalActivities\Repositories\Interfaces\PrincipalActivityRepositoryInterface;
use App\Fiscality\PrincipalActivities\Requests\CreatePrincipalActivityRequest;
use App\Fiscality\PrincipalActivities\Requests\UpdatePrincipalActivityRequest;
use App\Http\Controllers\Controller;

class PrincipalActivityController extends Controller
{
    public $principalActivityRepositoryInterface;

    public function __construct(PrincipalActivityRepositoryInterface $principalActivityRepositoryInterface)
    {
        $this->principalActivityRepositoryInterface = $principalActivityRepositoryInterface;
    }

    public function index()
    {
        return $this->principalActivityRepositoryInterface->index();
    }

    public function store(CreatePrincipalActivityRequest $request)
    {
        $principalActivity = $this->principalActivityRepositoryInterface->store($request->validated());

        return response()->json(['principalActivity' => $principalActivity, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return $this->principalActivityRepositoryInterface->find($id);
    }

    public function update(UpdatePrincipalActivityRequest $request, $id)
    {
        $principalActivity = $this->principalActivityRepositoryInterface->update($request->validated(), $id);

        return response()->json(['principalActivity' => $principalActivity, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->principalActivityRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
