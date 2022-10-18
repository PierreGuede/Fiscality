<?php

namespace App\Fiscality\TaxBases\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fiscality\TaxBases\Requests\CreateTaxBaseRequest;
use App\Fiscality\TaxBases\Requests\UpdateTaxBaseRequest;
use App\Fiscality\TaxBases\Repositories\Interfaces\TaxBaseRepositoryInterface;

class TaxBaseController extends Controller
{
    public $taxBaseRepositoryInterface;
    public function __construct(TaxBaseRepositoryInterface $taxBaseRepositoryInterface)
    {
        $this->taxBaseRepositoryInterface=$taxBaseRepositoryInterface;
    }

    public function index()
    {
        return $this->taxBaseRepositoryInterface->index();
    }

    public function store(CreateTaxBaseRequest $request)
    {
        $this->taxBaseRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateTaxBaseRequest $request,$id)
    {
        $this->taxBaseRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->taxBaseRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
