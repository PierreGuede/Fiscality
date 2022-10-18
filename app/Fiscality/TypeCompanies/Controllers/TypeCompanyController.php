<?php

namespace App\Fiscality\TypeCompanies\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\TypeCompanies\Requests\CreateTypeCompanyRequest;
use App\Fiscality\TypeCompanies\Requests\UpdateTypeCompanyRequest;
use App\Fiscality\TypeCompanies\Repositories\Interfaces\TypeCompanyRepositoryInterface;


class TypeCompanyController extends Controller
{
    public $typeCompanyRepositoryInterface;
    public function __construct(TypeCompanyRepositoryInterface $typeCompanyRepositoryInterface)
    {
        $this->typeCompanyRepositoryInterface=$typeCompanyRepositoryInterface;
    }

    public function index()
    {
        return $this->typeCompanyRepositoryInterface->index();
    }

    public function store(CreateTypeCompanyRequest $request)
    {
        $this->typeCompanyRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateTypeCompanyRequest $request,$id)
    {
        $this->typeCompanyRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->typeCompanyRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
