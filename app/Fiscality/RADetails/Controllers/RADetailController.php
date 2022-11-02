<?php

namespace App\Fiscality\RADetails\Controllers;

use App\Fiscality\RADetails\Repositories\Interfaces\RADetailRepositoryInterface;
use App\Fiscality\RADetails\Requests\CreateRADetailRequest;
use App\Fiscality\RADetails\Requests\UpdateRADetailRequest;
use App\Http\Controllers\Controller;

class RADetailController extends Controller
{
    public $raDetailRepositoryInterface;

    public function __construct(RADetailRepositoryInterface $raDetailRepositoryInterface)
    {
        $this->raDetailRepositoryInterface = $raDetailRepositoryInterface;
    }

    public function index()
    {
        return $this->raDetailRepositoryInterface->index();
    }

    public function store(CreateRADetailRequest $request)
    {
        $raDetail = $this->raDetailRepositoryInterface->store($request->all());

        return response()->json(['raDetail' => $raDetail, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return $this->raDetailRepositoryInterface->find($id);
    }

    public function update(UpdateRADetailRequest $request, $id)
    {
        $raDetail = $this->raDetailRepositoryInterface->update($request->all(), $id);

        return response()->json(['raDetail' => $raDetail, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->raDetailRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
