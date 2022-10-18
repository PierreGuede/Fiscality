<?php

namespace App\Fiscality\IMItems\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\IMItems\Requests\CreateIMItemRequest;
use App\Fiscality\IMItems\Requests\UpdateIMItemRequest;
use App\Fiscality\IMItems\Repositories\Interfaces\IMItemRepositoryInterface;

class IMItemController extends Controller
{
    public $imItemRepositoryInterface;
    public function __construct(IMItemRepositoryInterface $imItemRepositoryInterface)
    {
        $this->imItemRepositoryInterface=$imItemRepositoryInterface;
    }

    public function index()
    {
        return $this->imItemRepositoryInterface->index();
    }

    public function store(CreateIMItemRequest $request)
    {
        $this->imItemRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateIMItemRequest $request,$id)
    {
        $this->imItemRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->imItemRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
