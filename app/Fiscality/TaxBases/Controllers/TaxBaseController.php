<?php

namespace App\Fiscality\TaxBases\Controllers;

use App\Fiscality\TaxBases\Repositories\Interfaces\TaxBaseRepositoryInterface;
use App\Fiscality\TaxBases\Requests\CreateTaxBaseRequest;
use App\Fiscality\TaxBases\Requests\UpdateTaxBaseRequest;
use App\Http\Controllers\Controller;

class TaxBaseController extends Controller
{
    public $taxBaseRepositoryInterface;

    public function __construct(TaxBaseRepositoryInterface $taxBaseRepositoryInterface)
    {
        $this->taxBaseRepositoryInterface = $taxBaseRepositoryInterface;
    }

    public function index()
    {
        return $this->taxBaseRepositoryInterface->index();
    }

    public function store(CreateTaxBaseRequest $request)
    {
        $taxBase = $this->taxBaseRepositoryInterface->store($request->validated());

        return response()->json(['taxBase' => $taxBase, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return $this->taxBaseRepositoryInterface->find($id);
    }

    public function update(UpdateTaxBaseRequest $request, $id)
    {
        $taxBase = $this->taxBaseRepositoryInterface->update($request->validated(), $id);

        return response()->json(['taxBase' => $taxBase, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->taxBaseRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
