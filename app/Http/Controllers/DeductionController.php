<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use App\Fiscality\DeductionDetails\DeductionDetail;
use App\Fiscality\Deductions\Deduction;
use Illuminate\Http\Request;

class DeductionController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.tax-result.deduction.index', compact('company'));
    }

    public function store(Request $request, Company $company)
    {
        // dd($request->all());
        $sum = [];
        foreach ($request->name as $key => $value) {
            $deductible_amount = ($request->rate[$key] / 100) * $request->rcm_net_amount[$key];

            array_push($sum, $deductible_amount);
        }
        $deduction = Deduction::create([
            'total_product_amount' => array_sum($sum),
            'company_id' => $company->id,
        ]);
        foreach ($request->name as $key => $value) {
            $detail = DeductionDetail::create([
                'name' => $request->name[$key],
                'rcm_net_amount' => $request->rcm_net_amount[$key],
                'rate' => $request->rate[$key],
                'deductible_amount' => ($request->rate[$key] / 100) * $request->rcm_net_amount[$key],
                'deduction_id' => $deduction->id,
            ]);
        }

        return redirect()->route('tax-result.deduction', $company->id);
    }
}
