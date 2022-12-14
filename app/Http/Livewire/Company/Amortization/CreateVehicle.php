<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Vehicles\Vehicle;
use App\Models\AmortizationSetting;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class CreateVehicle extends ModalComponent
{
    use Actions;

    public Amortization $model;

    public $depreciation_base_limit = 25_000_000;

    public $company;

    public $data = [
        'name' => '',
        'value' => 0,
        'plafond' => 25000000,
        'dotation' => '',
        'date' => '',
    ];

    protected $rules = [
        'data.name' => 'required|string',
        'data.value' => 'required|integer',
        'data.plafond' => 'required|integer',
        'data.dotation' => 'required|integer',
        //        'data.date' => 'date|before_or_equal:today',
    ];

    protected $messages = [
        'data.name.required' => 'champ obligatoire',
        'data.value.required' => 'champ obligatoire',
        'data.amount.required' => 'champ obligatoire',
        'data.dotation.required' => 'champ obligatoire',
        //        'data.date.before_or_equal' => 'doit être inférieur à la date actuelle',
        //        'data.date.required' => 'champ requis',
        //        'data.date.date' => 'le champ doit être une date',

    ];

    public function mount(Company $company)
    {
        $this->company = $company;

        $setting = AmortizationSetting::whereCompanyId($company->id)->first();
        $this->fill([
            'plafond' => $setting->depreciation_base_limit,
            'depreciation_base_limit' => $setting->depreciation_base_limit
        ]);
    }

    public function render()
    {
        return view('livewire.company.amortization.create-vehicle');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function save()
    {
        $this->validate();

        try {
            $ecart = $this->data['value'] - $this->data['plafond'];
            $deductibleAmortization = ((float) $this->data['dotation'] * (float) $ecart) / (float) $this->data['value'];
            Vehicle::create([
                'name' => $this->data['name'],
                'value' => $this->data['value'],
                'plafond' => $this->data['plafond'],
                'ecart' => $ecart,
                'dotation' => $this->data['dotation'],
                'deductible_amortization' => $deductibleAmortization,
                'date' => $this->data['date'],
                'company_id' => $this->company->id,
            ]);

            $this->emit('newVehicle');
            $this->notification()->success(
                $title = 'Succès',
                $description = 'Opération effectuée avec succès!'
            );

            $this->closeModal();
        } catch (\Throwable $th) {
            notify()->error('Une erreur est survenue');
            throw $th;
        }
    }
}
