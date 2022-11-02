<?php

namespace App\Fiscality\PackUsers\Controllers;

use App\Fiscality\PackUsers\Repositories\Interfaces\PackUserRepositoryInterface;
use App\Fiscality\PackUsers\Requests\CreatePackUserRequest;
use App\Fiscality\PackUsers\Requests\UpdatePackUserRequest;
use App\Http\Controllers\Controller;

class PackUserController extends Controller
{
    public $packUserRepositoryInterface;

    public function __construct(PackUserRepositoryInterface $packUserRepositoryInterface)
    {
        $this->packUserRepositoryInterface = $packUserRepositoryInterface;
    }

    public function index()
    {
        return $this->packUserRepositoryInterface->index();
    }

    public function store(CreatePackUserRequest $request)
    {
        $this->packUserRepositoryInterface->store($request->all());

        return response()->json(['message' => 'success']);
    }

    public function update(UpdatePackUserRequest $request, $id)
    {
        $this->packUserRepositoryInterface->update($request->all(), $id);

        return response()->json(['message' => 'success']);
    }

    public function destroy($id)
    {
        $this->packUserRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
