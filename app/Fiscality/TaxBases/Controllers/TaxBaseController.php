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
        $taxBase=$this->taxBaseRepositoryInterface->store($request->all());
        return response()->json(["taxBase"=> $taxBase,"message"=>"Enregistrement bien effectué"]);
    }

    public function find($id)
    {
        return response()->json([
            'taxBase'=>$this->taxBaseRepositoryInterface->find($id)
        ]);
    }
    public function update(UpdateTaxBaseRequest $request,$id)
    {
        $taxBase=$this->taxBaseRepositoryInterface->update($request->all(),$id);
        return response()->json(['taxBase'=>$taxBase,"message"=> "Modifié avec succès"]);
    }

    public function destroy($id)
    {
        $this->taxBaseRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
