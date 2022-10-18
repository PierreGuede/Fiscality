<?php

namespace App\Fiscality\TaxCenters\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\TaxCenters\Requests\CreateTaxCenterRequest;
use App\Fiscality\TaxCenters\Requests\UpdateTaxCenterRequest;
use App\Fiscality\TaxCenters\Repositories\Interfaces\TaxCenterRepositoryInterface;

class TaxCenterController extends Controller
{
    public $taxCenterRepositoryInterface;
    public function __construct(TaxCenterRepositoryInterface $taxCenterRepositoryInterface)
    {
        $this->taxCenterRepositoryInterface=$taxCenterRepositoryInterface;
    }

    public function index()
    {
        return $this->taxCenterRepositoryInterface->index();
    }

    public function store(CreateTaxCenterRequest $request)
    {
        $this->taxCenterRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateTaxCenterRequest $request,$id)
    {
        $this->taxCenterRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->taxCenterRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
