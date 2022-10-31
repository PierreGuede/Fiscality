<?php

namespace App\Fiscality\Packs\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\Packs\Requests\CreatePackRequest;
use App\Fiscality\Packs\Requests\UpdatePackRequest;
use App\Fiscality\Packs\Repositories\Interfaces\PackRepositoryInterface;

class PackController extends Controller
{
    public $packRepositoryInterface;
    public function __construct(PackRepositoryInterface $packRepositoryInterface)
    {
        $this->packRepositoryInterface=$packRepositoryInterface;
    }

    public function index()
    {
        return $this->packRepositoryInterface->index();
    }

    public function store(CreatePackRequest $request)
    {
        $pack=$this->packRepositoryInterface->store($request->all());
        return response()->json(["pack"=> $pack,"message"=>"Enregistrement bien effectué"]);
    }

    public function find($id)
    {
        return $this->packRepositoryInterface->find($id);
    }
    public function update(UpdatePackRequest $request,$id)
    {
        $pack=$this->packRepositoryInterface->update($request->all(),$id);
        return response()->json(['pack'=>$pack,"message"=> "Modifié avec succès"]);
    }

    public function destroy($id)
    {
        $this->packRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
