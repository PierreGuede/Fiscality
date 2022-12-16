<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\Companies\Company;
use App\Fiscality\ExcessRents\ExcessRent;
use App\Http\Livewire\OtherReintegrationSettingHandler;
use Livewire\Component;

class CreateExcessRent extends Component
{
    public bool  $open_a_side = false;

    public Company $company;

    public $rent_amount;

    public $rental_period_year;

    public $annual_deduction_limit = 6_250_000;

    public $applicable_deduction_limit_days;

    public $amount_rent_reintegrated;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'rent_amount' => 'required|min:1',
        'rental_period_year' => 'required|min:1',
    ];

    protected $messages = [
        'rent_amount' => 'champ obligatoire',
        'rental_period_year' => 'champ obligatoire',
    ];

    public function mount(Company $company)
    {
        $otherReintegrationSetting = OtherReintegrationSettingHandler::getValue($company->id);
        $this->applicable_deduction_limit_days = $otherReintegrationSetting->excess_rent_applicable_deduction_limit;
        $this->annual_deduction_limit = $otherReintegrationSetting->annual_deduction_limit;

        $this->currentStep = 1;
        $this->company = $company;

    }

    public function render()
    {
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.create-excess-rent');
    }

    public function openASide()
    {
        $this->open_a_side = true;
    }

    public function closeASide()
    {
        $this->open_a_side = false;
    }

    public function save()
    {
        $this->validate();

        $applicable_deduction_limit = $this->annual_deduction_limit * $this->rental_period_year / $this->applicable_deduction_limit_days;
        $amount_rent_reintegrated = $this->rent_amount - $applicable_deduction_limit;

        ExcessRent::create([
            'rent_amount' => $this->rent_amount,
            'rental_period_year' => $this->rental_period_year,
            'annual_deduction_limit' => $this->annual_deduction_limit,
            'applicable_deduction_limit' => $applicable_deduction_limit,
            'amount_rent_reintegrated' => $amount_rent_reintegrated,
            'company_id' => $this->company->id,
        ]);

        $this->emit('refresh');

        $this->closeASide();
    }
}
