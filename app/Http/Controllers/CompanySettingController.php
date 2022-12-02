<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use App\Fiscality\Companies\Requests\UpdateCompanyRequest;
use App\Fiscality\TaxCenters\TaxCenter;
use App\Fiscality\TypeCompanies\TypeCompany;
use Illuminate\Http\Request;

class CompanySettingController extends Controller
{
    public function index(Request $request, Company $company)
    {
        $company_type = TypeCompany::all();
        $tax_center = TaxCenter::all();

        return view('auth.company-setting.index', compact('company', 'company_type', 'tax_center'));
    }

//    Imposisition
    public function taxation(Request $request, Company $company)
    {
        return view('auth.company-setting.taxation', compact('company'));
    }

    public function taxType(Request $request, Company $company)
    {
        return view('auth.company-setting.tax-type', compact('company'));
    }

    public function updateCompany(UpdateCompanyRequest $request, Company $company)
    {
        $company->fill($request->validated());
        $company->save();

        notify()->success('Entreprise mise à jour avec succès!');

        return redirect()->back();
    }
}
