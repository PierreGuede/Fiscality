<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Fiscality\Excesss\Excess;
use App\Fiscality\Companies\Company;
use App\Fiscality\Amortizations\Amortization;

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

    public function edit(Company $company, Excess $excess){
        return view ('admin.amortization.amortization-excess.modify',compact('company','excess'));
    }
    public function update(Company $company,$excess, Request $request){
        $request->validate([
            'category_imo' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
            'designation' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
            'taux_use' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
            'taux_recommended' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
            'ecart' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
            'dotation' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
            'deductible_amortization' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
        ]);
        $update=Excess::find($excess);
        $update->update($request->all());
        return redirect()->route('amortization.amortization-excess',$company);
    }
}
