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
        $total = AccuredChargeCompany::where('company_id', $company->id)->sum('amount');

        return view('admin.adminWork.accuredCharge', compact('company', 'total'));
    }
    /* detailProvision */

    public function provision(Company $company)
    {
        $cahrgesCompany = AccuredChargeCompany::where('type', 'provision')->where('company_id', $company->id)->where('date', date('Y'))->first();
        if ($cahrgesCompany == null) {
            return view('admin.adminWork.provision', compact('company'));
        } else {
            notify()->error('Vous avez deja créé un cette année');

            return redirect()->back()->withErrors(['msg' => 'Vous avez deja créé un cette année']);
        }
    }

    public function detailProvision(Company $company)
    {
        $cahrgesCompany = AccuredChargeCompany::where('type', 'provision')->where('company_id', $company->id)->where('date', date('Y'))->get();

        return view('admin.adminWork.detail-provision', compact('company', 'cahrgesCompany'));
    }

    public function detailexpenseProvisioned(Company $company)
    {
        $cahrgesCompany = AccuredChargeCompany::where('type', AccuredChargeCompany::EXPENSE_PROVISIONED)->where('company_id', $company->id)->where('date', date('Y'))->get();

        return view('admin.adminWork.detail-expenseProvisioned', compact('company', 'cahrgesCompany'));
    }


    public function editProvisionOrExpenseProvisionned(Company $company,AccuredChargeCompany $provision)
    {
        if ($provision->type =='provision') {
            return view('admin.adminWork.edit-provision', compact('company','provision'));

        }

        elseif ($provision->type == AccuredChargeCompany::EXPENSE_PROVISIONED) {
            return view('admin.adminWork.edit-expense-provisioned', compact('company','provision'));

        }


    }
/* updateProvision */
    public function expenseProvisioned(Company $company)
    {
        $cahrgesCompany = AccuredChargeCompany::where('type', AccuredChargeCompany::EXPENSE_PROVISIONED)->whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        if ($cahrgesCompany == null) {
//            notify()->success('Provision ont été ajouté avec succès !');

            return view('admin.adminWork.expenseProvisioned', compact('company'));
        } else {
            notify()->error('Vous avez deja créé un cette année');

            return redirect()->back()->withErrors(['msg' => 'Vous avez deja créé un cette année']);
        }
    }


    public function personalProvision(Company $company)
    {
        $cahrgesCompany = AccuredChargeCompany::where('type', 'personal-provision')->where('company_id', $company->id)->where('date', date('Y'))->first();
        if ($cahrgesCompany == null) {
            return view('admin.adminWork.personnal-provision', compact('company'));
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
    public function update(Request $data, Company $company, AccuredChargeCompany $provision)
    {
        $provision->update([
            'compte' => $data['compte'],
            'designation' => $data['designation'],
            'amount' => $data['amount'],
        ]);
        if ($provision->type =='provision') {
            return redirect()->route('tax-result.reintegration.accured-charge.detailProvision',$company->id);
        }
        elseif ($provision->type == AccuredChargeCompany::EXPENSE_PROVISIONED) {
            return redirect()->route('tax-result.reintegration.accured-charge.detailexpenseProvisioned',$company->id);
        }
    }

}
