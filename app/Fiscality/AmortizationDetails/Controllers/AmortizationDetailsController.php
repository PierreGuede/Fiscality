<?php

namespace App\Fiscality\AmortizationDetails\Controllers;

use App\Fiscality\Companies\Company;
use App\Fiscality\Depreciations\Depreciation;
use App\Fiscality\Excesss\Excess;
use App\Fiscality\Vehicles\Vehicle;
use App\Http\Controllers\Controller;

class AmortizationDetailsController extends Controller
{
    public function index(Company $company)
    {
        $totalSum=[];
        $vehicle= Vehicle::where('company_id',$company->id)->sum('deductible_amortization');
        $deductible_amortization=Excess::where('company_id',$company->id)->sum('deductible_amortization');
        $dotation=Depreciation::where('company_id',$company->id)->sum('dotation');

        $total=array_sum(array($vehicle,$deductible_amortization,$dotation));
        return view('admin.amortization.index', compact('company','total'));
    }
}
