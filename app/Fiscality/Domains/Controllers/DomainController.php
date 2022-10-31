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
        $domain=$this->domainRepositoryInterface->store($request->all());
        return response()->json(["domain"=> $domain,"message"=>"Enregistrement bien effectué"]);
    }

    public function find($id)
    {
        return $this->domainRepositoryInterface->find($id);
    }
    public function update(UpdateDomainRequest $request,$id)
    {
        $domain=$this->domainRepositoryInterface->update($request->all(),$id);
        return response()->json(['domain'=>$domain,"message"=> "Modifié avec succès"]);
    }

    public function destroy($id)
    {
        $this->domainRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
