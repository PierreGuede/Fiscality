<?php

namespace App\Fiscality\ProfileUsers\Controllers;

use App\Fiscality\ProfileUsers\Repositories\Interfaces\ProfileUserRepositoryInterface;
use App\Fiscality\ProfileUsers\Requests\CreateProfileUserRequest;
use App\Fiscality\ProfileUsers\Requests\UpdateProfileUserRequest;
use App\Http\Controllers\Controller;

class ProfileUserController extends Controller
{
    public $profileUserRepositoryInterface;

    public function __construct(ProfileUserRepositoryInterface $profileUserRepositoryInterface)
    {
        $this->profileUserRepositoryInterface = $profileUserRepositoryInterface;
    }

    public function index()
    {
        return $this->profileUserRepositoryInterface->index();
    }

    public function store(CreateProfileUserRequest $request)
    {
        $this->profileUserRepositoryInterface->store($request->all());

        return response()->json(['message' => 'success']);
    }

    public function update(UpdateProfileUserRequest $request, $id)
    {
        $this->profileUserRepositoryInterface->update($request->all(), $id);

        return response()->json(['message' => 'success']);
    }

    public function destroy($id)
    {
        $this->profileUserRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
