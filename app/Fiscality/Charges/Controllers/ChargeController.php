<?php

namespace App\Fiscality\Charges\Controllers;

use App\Fiscality\Charges\Repositories\Interfaces\ChargeRepositoryInterface;
use App\Fiscality\Charges\Requests\CreateChargeRequest;
use App\Fiscality\Charges\Requests\UpdateChargeRequest;
use App\Http\Controllers\Controller;

class ChargeController extends Controller
{
    public $chargeRepositoryInterface;

    public function __construct(ChargeRepositoryInterface $chargeRepositoryInterface)
    {
        $this->chargeRepositoryInterface = $chargeRepositoryInterface;
    }

    public function index()
    {
        return $this->chargeRepositoryInterface->index();
    }

    public function store(CreateChargeRequest $request)
    {
        $this->chargeRepositoryInterface->store($request->all());

        return response()->json(['message' => 'success']);
    }

    public function update(UpdateChargeRequest $request, $id)
    {
        $this->chargeRepositoryInterface->update($request->all(), $id);

        return response()->json(['message' => 'success']);
    }

    public function destroy($id)
    {
        $this->chargeRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
