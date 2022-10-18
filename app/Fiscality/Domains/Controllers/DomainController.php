<?php

namespace App\Fiscality\Domains\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\Domains\Requests\CreateDomainRequest;
use App\Fiscality\Domains\Requests\UpdateDomainRequest;
use App\Fiscality\Domains\Repositories\Interfaces\DomainRepositoryInterface;

class DomainController extends Controller
{
    public $domainRepositoryInterface;
    public function __construct(DomainRepositoryInterface $domainRepositoryInterface)
    {
        $this->domainRepositoryInterface=$domainRepositoryInterface;
    }

    public function index()
    {
        return $this->domainRepositoryInterface->index();
    }

    public function store(CreateDomainRequest $request)
    {
        $this->domainRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateDomainRequest $request,$id)
    {
        $this->domainRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->domainRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
