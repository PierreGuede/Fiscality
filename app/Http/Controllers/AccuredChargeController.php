<?php

namespace App\Http\Controllers;

use App\Fiscality\AccuredCharges\AccuredCharge;
use App\Fiscality\Companies\Company;
use App\Models\AccuredChargeCompany;
use Carbon\Carbon;
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
            return view('admin.adminWork.provision', compact('company'));
    }

    public function expenseProvisioned(Company $company)
    {
        $cahrgesCompany = AccuredChargeCompany::where('type', AccuredChargeCompany::EXPENSE_PROVISIONED)->whereCompanyId( $company->id)->whereYear('created_at', Carbon::now()->year)->first();
            notify()->success('Provision ont été ajouté avec succès !');
            return view('admin.adminWork.expenseProvisioned', compact('company'));
    }

    public function personalExpense(Company $company)
    {
        $cahrgesCompany = AccuredChargeCompany::where('type', 'personal-expense')->where('company_id', $company->id)->where('date', date('Y'))->first();
            // notify()->success('Les charges personnelles ont été ajouté avec succès !');
            return view('admin.adminWork.PersonnalExpense', compact('company'));

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
