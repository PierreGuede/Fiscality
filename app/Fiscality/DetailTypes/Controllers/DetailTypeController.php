<?php

namespace App\Fiscality\DetailTypes\Controllers;

use App\Fiscality\DetailTypes\Repositories\Interfaces\DetailTypeRepositoryInterface;
use App\Fiscality\DetailTypes\Requests\CreateDetailTypeRequest;
use App\Fiscality\DetailTypes\Requests\UpdateDetailTypeRequest;
use App\Http\Controllers\Controller;

class DetailTypeController extends Controller
{
    public $detailTypeRepositoryInterface;

    public function __construct(DetailTypeRepositoryInterface $detailTypeRepositoryInterface)
    {
        $this->detailTypeRepositoryInterface = $detailTypeRepositoryInterface;
    }

    public function index()
    {
        return $this->detailTypeRepositoryInterface->index();
    }

    public function store(CreateDetailTypeRequest $request)
    {
        $detail_type = $this->detailTypeRepositoryInterface->store($request->all());

        return response()->json(['detail_type' => $detail_type, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return$this->detailTypeRepositoryInterface->find($id);
    }

    public function update(UpdateDetailTypeRequest $request, $id)
    {
        $detail_type = $this->detailTypeRepositoryInterface->update($request->all(), $id);

        return response()->json(['detail_type' => $detail_type, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->detailTypeRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
