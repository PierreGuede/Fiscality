<?php

namespace App\Fiscality\TaxCenters\Controllers;

use App\Fiscality\TaxCenters\Repositories\Interfaces\TaxCenterRepositoryInterface;
use App\Fiscality\TaxCenters\Requests\CreateTaxCenterRequest;
use App\Fiscality\TaxCenters\Requests\UpdateTaxCenterRequest;
use App\Http\Controllers\Controller;

class TaxCenterController extends Controller
{
    public $taxCenterRepositoryInterface;

    public function __construct(TaxCenterRepositoryInterface $taxCenterRepositoryInterface)
    {
        $this->taxCenterRepositoryInterface = $taxCenterRepositoryInterface;
    }

    public function index()
    {
        return $this->taxCenterRepositoryInterface->index();
    }

    public function store(CreateTaxCenterRequest $request)
    {
        $taxCenter = $this->taxCenterRepositoryInterface->store($request->all());

        return response()->json(['taxCenter' => $taxCenter, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return $this->taxCenterRepositoryInterface->find($id);
    }

    public function update(UpdateTaxCenterRequest $request, $id)
    {
        $taxCenter = $this->taxCenterRepositoryInterface->update($request->all(), $id);

        return response()->json(['taxCenter' => $taxCenter, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->taxCenterRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
