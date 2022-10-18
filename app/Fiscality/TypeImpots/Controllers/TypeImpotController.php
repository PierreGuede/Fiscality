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
        $this->typeImpotRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateTypeImpotRequest $request,$id)
    {
        $this->typeImpotRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->typeImpotRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
