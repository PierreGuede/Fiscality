<?php

namespace App\Fiscality\IMItems\Controllers;

use App\Fiscality\IMItems\Repositories\Interfaces\IMItemRepositoryInterface;
use App\Fiscality\IMItems\Requests\CreateIMItemRequest;
use App\Fiscality\IMItems\Requests\UpdateIMItemRequest;
use App\Http\Controllers\Controller;

class IMItemController extends Controller
{
    public $imItemRepositoryInterface;

    public function __construct(IMItemRepositoryInterface $imItemRepositoryInterface)
    {
        $this->imItemRepositoryInterface = $imItemRepositoryInterface;
    }

    public function index()
    {
        return $this->imItemRepositoryInterface->index();
    }

    public function store(CreateIMItemRequest $request)
    {
        $imItem = $this->imItemRepositoryInterface->store($request->validated());

        return response()->json(['imItem' => $imItem, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return $this->imItemRepositoryInterface->find($id);
    }

    public function update(UpdateIMItemRequest $request, $id)
    {
        $imItem = $this->imItemRepositoryInterface->update($request->validated(), $id);

        return response()->json(['imItem' => $imItem, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->imItemRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
