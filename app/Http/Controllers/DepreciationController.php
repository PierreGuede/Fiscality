<?php

namespace App\Http\Controllers;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Depreciations\Depreciation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DepreciationController extends Controller
{
    public $model;

    public $amortisation;

    public function __construct(Depreciation $model, Amortization $amortisation)
    {
        $this->model = $model;
        $this->amortisation = $amortisation;
    }

    public function index(Company $company)
    {
        $data = Depreciation::where('company_id', $company->id)->get();

        return view('admin.amortization.depreciation-assets.index', compact('data', 'company'));
    }

    public function store(Request $data, $id)
    {
        $amortization_id = $this->amortisation->find($data['amortization_id']);
        try {
            $amortisationDetails = $this->model->create([
                'category_imo' => $data['category_imo'],
                'designation' => $data['designation'],
                'dotation' => $data['dotation'],
                'amortization_id' => $amortization_id,
                'company_id' => $id,
            ]);

            return $amortisationDetails;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit(Company $company, Depreciation $depreciation)
    {
        return view('admin.amortization.depreciation-assets.modify', compact('company', 'depreciation'));
    }

    public function update(Company $company, $depreciation, Request $request)
    {
        $request->validate([
            'category_imo' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('depreciations')->ignore($depreciation)],
            'designation' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('depreciations')->ignore($depreciation)],
            'dotation' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('depreciations')->ignore($depreciation)],
        ]);
        $update = Depreciation::find($depreciation);
        $update->update($request->all());

        return redirect()->route('amortization.depreciation-assets', $company);
    }
}
