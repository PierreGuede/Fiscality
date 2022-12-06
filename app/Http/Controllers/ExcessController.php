<?php

namespace App\Http\Controllers;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Excesss\Excess;
use App\Http\Requests\StoreAmortizationExcessRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ExcessController extends Controller
{
    public $model;

    public $amortisation;

    public function __construct(Excess $model, Amortization $amortisation)
    {
        $this->model = $model;
        $this->amortisation = $amortisation;
    }

    public function index(Company $company)
    {
        $data = Excess::where('company_id', $company->id)->get();

        return view('admin.amortization.amortization-excess.index', compact('data', 'company'));
    }

    public function store(Request $data, $id)
    {
        $amortization_id = $this->amortisation->find($data['amortization_id']);
        try {
            $ecart = $data['taux_use'] - $data['taux_recommended'];
            $deductibleAmortization = ($data['dotation'] * $ecart) / $data['taux_use'];
            $amortisationDetails = $this->model->create([
                'category_imo' => $data['category_imo'],
                'designation' => $data['designation'],
                'taux_use' => $data['taux_use'],
                'taux_recommended' => $data['taux_recommended'],
                'ecart' => $ecart,
                'dotation' => $data['dotation'],
                'deductible_amortization' => $deductibleAmortization,
                'amortization_id' => $amortization_id,
                'company_id' => $id,
            ]);

            return $amortisationDetails;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit(Company $company, Excess $excess)
    {
        return view('admin.amortization.amortization-excess.edit', compact('company', 'excess'));
    }

    public function update(Company $company, $excess, Request $request)
    {
       $validated =  $request->validate([
            'category_imo' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
            'designation' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
            'taux_use' => ['sometimes', 'required', 'string', 'max:255'],
            'taux_recommended' => ['sometimes', 'required', 'string', 'max:255'],
            'ecart' => ['sometimes', 'required', 'string', 'max:255'],
            'dotation' => ['sometimes', 'required', 'string', 'max:255'],
            'deductible_amortization' => ['sometimes', 'required', 'string', 'max:255'],
        ]);

        $res = Excess::find($excess);
        $ecart = (float) $request->input('taux_use') - (float) $request->input('taux_recommended');
        $deductibleAmortization = ((float) $request->input('dotation') * (float) $ecart) / (float) $request->input('taux_use');
        $res->fill($validated);
        $res->ecart = $ecart;
        $res->deductible_amortization = $deductibleAmortization;
        $res->save();

        return redirect()->route('amortization.amortization-excess', $company);
    }
}
