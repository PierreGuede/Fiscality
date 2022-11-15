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

    public function index(Company $company)
    {
        $total=AccuredChargeCompany::where('company_id',$company->id)->sum('amount');
        return view('admin.adminWork.accuredCharge', compact('company','total'));
    }

    public function provision(Company $company)
    {
        $cahrgesCompany = AccuredChargeCompany::where('type', 'provision')->where('company_id', $company->id)->where('date', date('Y'))->first();
        if ($cahrgesCompany == null) {
            notify()->success('Provision ont été ajouté avec succès !');

            return view('admin.adminWork.provision', compact('company'));
        } else {
            notify()->error('Vous avez deja créé un cette année');

            return redirect()->back()->withErrors(['msg' => 'Vous avez deja créé un cette année']);
        }
    }

    public function expenseProvisioned(Company $company)
    {
        $cahrgesCompany = AccuredChargeCompany::where('type', 'charges')->where('company_id', $company->id)->where('date', date('Y'))->first();
        if ($cahrgesCompany == null) {
            notify()->success('Provision ont été ajouté avec succès !');

            return view('admin.adminWork.expenseProvisioned', compact('company'));
        } else {
            notify()->error('Vous avez deja créé un cette année');

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
