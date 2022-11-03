<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\AmortizationDetails\AmortizationDetails;
use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Excesss\Excess;
use App\Fiscality\Vehicles\Vehicle;
use App\Http\Livewire\Company\CardDetail;
use LivewireUI\Modal\ModalComponent;

class CreateExcess extends ModalComponent
{
    public Amortization $model;

    public Vehicle $amortisation;

    public $company;


    public  $data = [
        'category_imo' => '',
        'designation' => '',
        'taux_use' => 0,
        'taux_recommended' => 0,
        'dotation' => 0,
//        'ecart' => 0,
//        'deductible_amortization' => 0,
    ];

    public  $rules = [
        'category_imo' => 'required|min:1',
        'designation' => 'required|min:1',
        'dotation' => 'required|min:',
        'taux_use' => 'required|numeric',
        'taux_recommended' => 'required|numeric',
    ];



    public function mount(Company $company)
    {
        $this->company = $company;
    }


    public function render()
    {
        return view('livewire.company.amortization.create-excess');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function save()
    {
        $armortization = Amortization::create([]);
        try {
            $ecart = (double)$this->data['taux_use'] - $this->data['taux_recommended'];
            $deductibleAmortization = ((double)$this->data['dotation'] * (double)$ecart) / (double)$this->data['taux_use'];
            $amortisationDetails = Excess::create([
                'category_imo' => $this->data['category_imo'],
                'designation' => $this->data['designation'],
                'taux_use' => $this->data['taux_use'],
                'taux_recommended' => $this->data['taux_recommended'],
                'ecart' => $ecart,
                'dotation' => $this->data['dotation'],
                'deductible_amortization' => $deductibleAmortization,
                'amortization_id' => $armortization->id,
                'company_id' => $this->company->id,
            ]);


//            $this->emitTo( 'card-detail', 'incrementCount');

            $this->closeModal();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
