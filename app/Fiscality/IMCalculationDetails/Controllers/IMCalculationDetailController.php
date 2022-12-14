<?php

namespace App\Fiscality\IMCalculationDetails\Controllers;

use App\Fiscality\IMCalculationDetails\Repositories\Interfaces\IMCalculationDetailRepositoryInterface;
use App\Fiscality\IMCalculationDetails\Requests\CreateIMCalculationDetailRequest;
use App\Fiscality\IMCalculationDetails\Requests\UpdateIMCalculationDetailRequest;
use App\Http\Controllers\Controller;

class IMCalculationDetailController extends Controller
{
    public $imCalculationDetailRepositoryInterface;

    public function __construct(IMCalculationDetailRepositoryInterface $imCalculationDetailRepositoryInterface)
    {
        $this->imCalculationDetailRepositoryInterface = $imCalculationDetailRepositoryInterface;
    }

    public function index()
    {
        return $this->imCalculationDetailRepositoryInterface->index();
    }

    public function store(CreateIMCalculationDetailRequest $request)
    {
        $imCalculationDetail = $this->imCalculationDetailRepositoryInterface->store($request->validated());

        return response()->json(['imCalculationDetail' => $imCalculationDetail, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return $this->imCalculationDetailRepositoryInterface->find($id);
    }

    public function update(UpdateIMCalculationDetailRequest $request, $id)
    {
        $imCalculationDetail = $this->imCalculationDetailRepositoryInterface->update($request->validated(), $id);

        return response()->json(['imCalculationDetail' => $imCalculationDetail, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->imCalculationDetailRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
