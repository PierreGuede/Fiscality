<?php

namespace App\Http\Controllers;

use App\Fiscality\AccuredCharges\AccuredCharge;
use App\Fiscality\Companies\Company;
use App\Models\AccuredChargeCompany;
use Illuminate\Http\Request;

class AccuredChargeController extends Controller
{
    public $model;

    public function __construct(AccuredCharge $model)
    {
        $this->model = $model;
    }

    public function index($id)
    {
        $company = Company::find($id);

        return view('admin.tax-result.accured-charge.index', compact('company'));
    }

    public function provision($id)
    {
        $company = Company::find($id);

        $cahrgesCompany = AccuredChargeCompany::where('type', 'provision')->where('company_id', $company->id)->where('date', date('Y'))->first();
        if ($cahrgesCompany == null) {
            return view('admin.adminWork.provision', [
                'company' => $company,
            ]);
        } else {
            return redirect()->back()->withErrors(['msg' => 'Vous avez deja créé un cette année']);
        }
    }

    public function expenseProvisioned($id)
    {
        $company = Company::find($id);
        $cahrgesCompany = AccuredChargeCompany::where('type', 'charges')->where('company_id', $company->id)->where('date', date('Y'))->first();
        if ($cahrgesCompany == null) {
            return view('admin.adminWork.expenseProvisioned', [
                'company' => $company,
            ]);
        } else {
            return redirect()->back()->withErrors(['msg' => 'Vous avez deja créé un cette année']);
        }
    }

    public function store(Request $data, $id)
    {
        $this->model->create([
            'compte' => $data['compte'],
            'designation' => $data['designation'],
            'type' => $data['type'],
        ]);
    }
}
