<?php

namespace App\Http\Controllers;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Excesss\Excess;
use Illuminate\Http\Request;

class ExcessController extends Controller
{
    public $model;

    public $amortisation;

    public function __construct(Excess $model, Amortization $amortisation)
    {
        $this->model = $model;
        $this->amortisation = $amortisation;
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
}
