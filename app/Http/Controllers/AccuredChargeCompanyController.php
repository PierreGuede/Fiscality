<?php

namespace App\Http\Controllers;

use App\Fiscality\AccuredCharges\AccuredCharge;
use App\Fiscality\Companies\Company;
use App\Models\AccuredChargeCompany;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccuredChargeCompanyController extends Controller
{
    public function index()
    {
        $accuredCharge = AccuredCharge::all();

        return view('admin.AccuredCharges.index', compact('accuredCharge'));
    }

    public function create()
    {
        return view('admin.AccuredCharges.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'compte' => ['required', 'string', 'max:255', 'unique:accured_charges'],
            'designation' => ['required', 'string', 'max:255', 'unique:accured_charges'],
        ]);
        $accuredCharges = AccuredCharge::create([
            'compte' => $request['compte'],
            'designation' => $request['designation'],
            'type' => $request['type'],
        ]);

        return redirect()->route('accured-charges.index');
    }

    public function edit($id)
    {
        $accuredCharges = AccuredCharge::find($id);

        return view('admin.AccuredCharges.update', ['accuredCharges' => $accuredCharges]);
    }

    public function update(Request $request, $id)
    {
        $accuredCharges = AccuredCharge::find($id);
        $request->validate([
            'compte' => ['required', 'string', 'max:255', Rule::unique('accured_charges')->ignore($id)],
            'designation' => ['required', 'string', 'max:255', Rule::unique('accured_charges')->ignore($id)],
        ]);
        $accuredCharges->update([
            'compte' => strtoupper($request['compte']),
            'designation' => $request['designation'],
        ]);

        return redirect()->route('accured-charges.index');
    }

    public function indexProvision(Company $company)
    {
        $accuredChargeCompany = AccuredChargeCompany::where('type', 'provision')->where('company_id', $company->id)->get();

        return view('admin.accured-charges.provision.index', compact('company', 'accuredChargeCompany'));
    }

    public function editProvision(Company $company, AccuredChargeCompany $accuredChargeCompany)
    {
        return view('admin.accured-charges.provision.modify', compact('company', 'accuredChargeCompany'));
    }

    public function indexExpenseProvisionned(Company $company)
    {
        $accuredChargeCompany = AccuredChargeCompany::where('type', 'expense_provisioned')->where('company_id', $company->id)->get();

        return view('admin.accured-charges.expense-provisionned.index', compact('company', 'accuredChargeCompany'));
    }

    public function editExpenseProvisionned(Company $company, AccuredChargeCompany $accuredChargeCompany)
    {
        return view('admin.accured-charges.expense-provisionned.modify', compact('company', 'accuredChargeCompany'));
    }

    public function indexPersonnalExpense(Company $company)
    {
        $accuredChargeCompany = AccuredChargeCompany::where('type', 'personal-expense')->where('company_id', $company->id)->get();

        return view('admin.accured-charges.personal-expense.index', compact('company', 'accuredChargeCompany'));
    }

    public function editPersonnalExpense(Company $company, AccuredChargeCompany $accuredChargeCompany)
    {
        return view('admin.accured-charges.personal-expense.modify', compact('company', 'accuredChargeCompany'));
    }

    // public function update(Company $company, $accuredChargeCompany, Request $request)
    // {
    //     $request->validate([
    //         'compte' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('accured_charge_companies')->ignore($accuredChargeCompany)->where('company_id', $company->id)],
    //         'designation' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('accured_charge_companies')->ignore($accuredChargeCompany)->where('company_id', $company->id)],
    //     ]);
    //     $update = AccuredChargeCompany::find($accuredChargeCompany);
    //     $update->update($request->validated());
    //     if ($update->type == 'provision') {
    //         return redirect()->route('work.provision.details', $company->id);
    //     } elseif ($update->type == 'expense_provisioned') {
    //         return redirect()->route('work.expenseProvisioned.details', $company->id);
    //     } elseif ($update->type == 'personal-expense') {
    //         return redirect()->route('work.personnalExpense.details', $company->id);
    //     }
    // }
}
