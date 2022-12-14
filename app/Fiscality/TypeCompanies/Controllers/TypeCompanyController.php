<?php

namespace App\Fiscality\TypeCompanies\Controllers;

use App\Fiscality\TypeCompanies\Repositories\Interfaces\TypeCompanyRepositoryInterface;
use App\Fiscality\TypeCompanies\Requests\CreateTypeCompanyRequest;
use App\Fiscality\TypeCompanies\Requests\UpdateTypeCompanyRequest;
use App\Http\Controllers\Controller;

class TypeCompanyController extends Controller
{
    public $typeCompanyRepositoryInterface;

    public function __construct(TypeCompanyRepositoryInterface $typeCompanyRepositoryInterface)
    {
        $this->typeCompanyRepositoryInterface = $typeCompanyRepositoryInterface;
    }

    public function index()
    {
        return $this->typeCompanyRepositoryInterface->index();
    }

    public function store(CreateTypeCompanyRequest $request)
    {
        $typeCompany = $this->typeCompanyRepositoryInterface->store($request->validated());

        return response()->json(['typeCompany' => $typeCompany, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return $this->typeCompanyRepositoryInterface->find($id);
    }

    public function update(UpdateTypeCompanyRequest $request, $id)
    {
        $typeCompany = $this->typeCompanyRepositoryInterface->update($request->validated(), $id);

        return response()->json(['typeCompany' => $typeCompany, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->typeCompanyRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
