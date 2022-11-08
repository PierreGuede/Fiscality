<?php

namespace App\Http\Controllers;

use App\Fiscality\GeneralCosts\GeneralCost;
use App\Fiscality\RADetails\RADetail;
use Illuminate\Http\Request;

class GeneralCostController extends Controller
{
    public function store(Request $request)
    {
        $expense = RADetail::where('type', 'expense')->get();
//         compte
        // designation
        // amount
        $total = array_sum($request['amount']);
        GeneralCost::create([
            'total' => $total,
        ]);
    }
}
