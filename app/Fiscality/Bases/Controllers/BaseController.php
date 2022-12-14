<?php

namespace App\Fiscality\Bases\Controllers;

use App\Fiscality\Bases\Repositories\Interfaces\BaseRepositoryInterface;
use App\Fiscality\Bases\Requests\CreateBaseRequest;
use App\Fiscality\Bases\Requests\UpdateBaseRequest;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $baseRepositoryInterface;

    public function __construct(BaseRepositoryInterface $baseRepositoryInterface)
    {
        $this->baseRepositoryInterface = $baseRepositoryInterface;
    }

    public function index()
    {
        return $this->baseRepositoryInterface->index();
    }

    public function store(CreateBaseRequest $request)
    {
        $base = $this->baseRepositoryInterface->store($request->validated());

        return response()->json(['base' => $base, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return response()->json([
            'base' => $this->baseRepositoryInterface->find($id),
        ]);
    }

    public function update(UpdateBaseRequest $request, $id)
    {
        $base = $this->baseRepositoryInterface->update($request->validated(), $id);

        return response()->json(['base' => $base, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->baseRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
