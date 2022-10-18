<?php
namespace App\Fiscality\AmortizationDetails\Repositories;

use App\Fiscality\AmortizationDetails\AmortizationDetails;
use App\Fiscality\AmortizationDetails\Repositories\Interfaces\AmortizationDetailsRepositoryInterface;
use App\Fiscality\Amortizations\Amortization;

class AmortizationDetailsRepository implements AmortizationDetailsRepositoryInterface
{
    public $model;
    public $amortisation;
    public function __construct(AmortizationDetails $model,Amortization $amortisation)
    {
        $this->model=$model;
        $this->amortisation=$amortisation;
    }
    public function index()
    {
        $amortisationDetails=$this->model->all();
        return $amortisationDetails;
    }

    public function store(array $data):AmortizationDetails
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
            ]);
            return $amortisationDetails;
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function edit(AmortizationDetails $id)
    {

    }

    public function update(array $data,$id):AmortizationDetails
    {
       try {
        $amortisationDetails=$this->model->find($id);
        $amortisationDetails->update($data);
        return $amortisationDetails;
       } catch (\Throwable $th) {
        throw $th;
       }
    }
    public function destroy($id)
    {

    }
}
