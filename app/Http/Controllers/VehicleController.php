<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Vehicles\Vehicle;

class VehicleController extends Controller
{
    public $model;
    public $amortisation;
    public function __construct(Vehicle $model,Amortization $amortisation)
    {
        $this->model=$model;
        $this->amortisation=$amortisation;
    }
    public function store(Request $data,$id)
    {
        $amortization_id=$this->amortisation->find($data['amortization_id']);
            try {
                $ecart=$data['value']-$data['plafond'];
                $deductibleAmortization=($data['dotation']*$ecart)/$data['value'];
                $amortisationDetails= $this->model->create([
                    'name'=>$data['name'],
                    'value'=>$data['value'],
                    'plafond'=>$data['plafond'],
                    'ecart'=>$ecart,
                    'dotation'=>$data['dotation'],
                    'deductible_amortization'=>$deductibleAmortization,
                    'date'=>$data['date'],
                    'amortization_id'=>$amortization_id,
                    'company_id'=>$id,
                ]);
                return $amortisationDetails;
            } catch (\Throwable $th) {
                throw $th;
            }
            
    }
}
