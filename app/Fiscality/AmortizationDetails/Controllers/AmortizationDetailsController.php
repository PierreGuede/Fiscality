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
        return view('admin.amortization.index', compact('company'));
    }
}
