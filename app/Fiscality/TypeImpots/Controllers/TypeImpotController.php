<?php

namespace App\Fiscality\TypeImpots\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\TypeImpots\Requests\CreateTypeImpotRequest;
use App\Fiscality\TypeImpots\Requests\UpdateTypeImpotRequest;
use App\Fiscality\TypeImpots\Repositories\Interfaces\TypeImpotRepositoryInterface;

class TypeImpotController extends Controller
{
    public $typeImpotRepositoryInterface;
    public function __construct(TypeImpotRepositoryInterface $typeImpotRepositoryInterface)
    {
        $this->typeImpotRepositoryInterface=$typeImpotRepositoryInterface;
    }

    public function index()
    {
        return $this->typeImpotRepositoryInterface->index();
    }

    public function store(CreateTypeImpotRequest $request)
    {
        $typeImpot=$this->typeImpotRepositoryInterface->store($request->all());
        return response()->json(["typeImpot"=> $typeImpot,"message"=>"Enregistrement bien effectué"]);
    }

    public function find($id)
    {
        return $this->typeImpotRepositoryInterface->find($id);
    }
    public function update(UpdateTypeImpotRequest $request,$id)
    {
        $typeImpot=$this->typeImpotRepositoryInterface->update($request->all(),$id);
        return response()->json(['typeImpot'=>$typeImpot,"message"=> "Modifié avec succès"]);
    }

    public function destroy($id)
    {
        $this->typeImpotRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
