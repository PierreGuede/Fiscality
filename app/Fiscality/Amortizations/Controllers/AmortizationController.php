<?php

namespace App\Fiscality\Amortizations\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\Amortizations\Requests\CreateAmortizationRequest;
use App\Fiscality\Amortizations\Requests\UpdateAmortizationRequest;
use App\Fiscality\Amortizations\Repositories\Interfaces\AmortizationRepositoryInterface;

class AmortizationController extends Controller
{
    public $amortizationRepositoryInterface;
    public function __construct(AmortizationRepositoryInterface $amortizationRepositoryInterface)
    {
        $this->amortizationRepositoryInterface = $amortizationRepositoryInterface;
    }

    public function index()
    {
        return $this->amortizationRepositoryInterface->index();
    }

    public function store(CreateAmortizationRequest $request)
    {
        $this->amortizationRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateAmortizationRequest $request,$id)
    {
        $this->amortizationRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->amortizationRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
