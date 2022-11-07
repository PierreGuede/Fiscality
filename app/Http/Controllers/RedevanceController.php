<?php

namespace App\Http\Controllers;

use App\Fiscality\Redevances\Redevance;
use Illuminate\Http\Request;

class RedevanceController extends Controller
{
    public function store(Request $request){
        $request["Account"];
        $request["designation"];
        $request["amount"];
        $request["turnover"];
        $request["deduction_limit"];
        $request["amount_reintegrated"];

        $total=array_sum($request['amount']->all());
        $deduction_limit=$request["turnover"]*0.05;
        $amount_reintegrated=$total-$deduction_limit;
        Redevance::create([
            "Account"=>$request["Account"],
            "designation"=>$request["designation"],
            "amount"=>$request["amount"],
            "turnover"=>$request["turnover"],
            "deduction_limit"=>$request["deduction_limit"],
            "amount_reintegrated"=>$request["amount_reintegrated"],
        ]);
    }
}
