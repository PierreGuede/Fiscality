<?php

namespace App\Http\Controllers;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Vehicles\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VehicleController extends Controller
{
    public $model;

    public $amortisation;

    public function __construct(Vehicle $model, Amortization $amortisation)
    {
        $this->model = $model;
        $this->amortisation = $amortisation;
    }

    public function index(Company $company)
    {
        $data = Vehicle::where('company_id', $company->id)->get();

        return view('admin.amortization.vehicle-tourism.index', compact('data', 'company'));
    }

    public function store(Request $data, $id)
    {
        $amortization_id = $this->amortisation->find($data['amortization_id']);
        try {
            $ecart = $data['value'] - $data['plafond'];
            $deductibleAmortization = ($data['dotation'] * $ecart) / $data['value'];
            $amortisationDetails = $this->model->create([
                'name' => $data['name'],
                'value' => $data['value'],
                'plafond' => $data['plafond'],
                'ecart' => $ecart,
                'dotation' => $data['dotation'],
                'deductible_amortization' => $deductibleAmortization,
                'date' => $data['date'],
                'amortization_id' => $amortization_id,
                'company_id' => $id,
            ]);

            return $amortisationDetails;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit(Company $company, Vehicle $vehicle)
    {
        return view('admin.amortization.vehicle-tourism.modify', compact('company', 'vehicle'));
    }

    public function update(Company $company, $vehicle, Request $request)
    {
        $request->validate([
            'name' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('vehicless')->ignore($vehicle)],
            'value' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('vehicless')->ignore($vehicle)],
            'plafond' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('vehicless')->ignore($vehicle)],
            'ecart' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('vehicless')->ignore($vehicle)],
            'dotation' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('vehicless')->ignore($vehicle)],
            'deductible_amortization' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('vehicless')->ignore($vehicle)],
            'date' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('vehicless')->ignore($vehicle)],
        ]);
        $update = Vehicle::find($vehicle);
        $update->update($request->all());

        return redirect()->route('amortization.tourism-cars', $company);
    }
}
