<?php

namespace App\Fiscality\IMCalculations\Controllers;

use App\Fiscality\IMCalculations\Repositories\Interfaces\IMCalculationRepositoryInterface;
use App\Fiscality\IMCalculations\Requests\CreateIMCalculationRequest;
use App\Fiscality\IMCalculations\Requests\UpdateIMCalculationRequest;
use App\Http\Controllers\Controller;

class IMCalculationController extends Controller
{
    public $imCalculationRepositoryInterface;

    public function __construct(IMCalculationRepositoryInterface $imCalculationRepositoryInterface)
    {
        $this->imCalculationRepositoryInterface = $imCalculationRepositoryInterface;
    }

    public function index()
    {
        return $this->imCalculationRepositoryInterface->index();
    }

    public function store(CreateIMCalculationRequest $request)
    {
        $imCalculation = $this->imCalculationRepositoryInterface->store($request->validated());

        return response()->json(['imCalculation' => $imCalculation, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return $this->imCalculationRepositoryInterface->find($id);
    }

    public function update(UpdateIMCalculationRequest $request, $id)
    {
        $imCalculation = $this->imCalculationRepositoryInterface->update($request->validated(), $id);

        return response()->json(['imCalculation' => $imCalculation, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->imCalculationRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
