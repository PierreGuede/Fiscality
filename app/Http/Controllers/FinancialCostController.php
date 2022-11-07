<?php

namespace App\Http\Controllers;

use App\Fiscality\FinancialCosts\FinancialCost;
use Illuminate\Http\Request;

class FinancialCostController extends Controller
{
    public function store(Request $request)
    {
        $maximum_rate=($request['interest_rate_BCEAO']+3)/100;
        $rate_surplus=$request['interest_rate_applied']-$maximum_rate;
        $reintegrate_cost=($request['amount_interest']*$rate_surplus)/$request['interest_rate_applied'];

        FinancialCost::create([
            'name'=>max(array($request['amount_reinstated'],$request['deducted_amount_interest'],$reintegrate_cost))
        ]);
    }
}
