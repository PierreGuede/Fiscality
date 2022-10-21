<?php

namespace App\Fiscality\Companies\Controllers;


use App\Http\Controllers\Controller;
use App\Fiscality\Companies\Requests\CreateCompanyRequest;
use App\Fiscality\Companies\Requests\UpdateCompanyRequest;
use App\Fiscality\Companies\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Fiscality\Companies\Resources\CompanyResource;

class CompanyController extends Controller
{
    public $companyInterface;
    public function __construct(CompanyRepositoryInterface $companyInterface)
    {
        $this->companyInterface=$companyInterface;
    }
    public function index()
    {
        return $this->companyInterface->index();
    }

    public function store(CreateCompanyRequest $request)
    {
        $this->companyInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function find($id)
    {
        return response()->json([
            'company'=>$this->companyInterface->find($id)
        ]);
    }

    public function update(UpdateCompanyRequest $request,$id)
    {
        $this->companyInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->companyInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }



}
