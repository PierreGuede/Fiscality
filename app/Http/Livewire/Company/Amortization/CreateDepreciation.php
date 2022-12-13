<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Depreciations\Depreciation;
use App\Fiscality\Vehicles\Vehicle;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class CreateDepreciation extends ModalComponent
{
    use Actions;

    public Amortization $model;

    public Vehicle $amortisation;

    public $company;

    public $data = [
        'category_imo' => '',
        'designation' => '',
        'taux_use' => 0,
        'taux_recommended' => 0,
        'dotation' => 0,
        //        'ecart' => 0,
        //        'deductible_amortization' => 0,
    ];

    public $rules = [
        'data.category_imo' => 'required|min:1',
        'data.designation' => 'required|min:1',
        'data.dotation' => 'required|numeric|min:1',
    ];

    public $messages = [
        'data.category_imo.required' => 'champ obligatoire',
        'data.designation.required' => 'champ obligatoire',
        'data.dotation.required' => 'champ obligatoire',

    ];

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.company.amortization.create-depreciation');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function save()
    {
        $this->validate();

        try {
            $amortisationDetails = Depreciation::create([
                'category_imo' => $this->data['category_imo'],
                'designation' => $this->data['designation'],
                'dotation' => $this->data['dotation'],
                'company_id' => $this->company->id,
            ]);

            $this->emit('newDepreciation');
            $this->notification()->success(
                $title = 'Succès',
                $description = 'Opération effectuée avec succès!'
            );

            $this->closeModal();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
