<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\Companies\Company;
use App\Fiscality\ExcessRents\ExcessRent;
use Carbon\Carbon;
use Livewire\Component;

class DetailExcessRent extends Component
{
    public bool  $open_a_side = false;

    public Company $company;

    public $rent_amount;

    public $rental_period_year;

    public $annual_deduction_limit = 6_250_000;

    public $applicable_deduction_limit;

    public $amount_rent_reintegrated;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'rent_amount' => 'required|min:1',
        'rental_period_year' => 'required|min:1',
        'annual_deduction_limit' => 'required|min:1',
    ];

    public function mount(Company $company)
    {
        $this->currentStep = 1;
        $this->company = $company;

        $excess_rent = ExcessRent::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->fill([
            'rent_amount' => is_null($excess_rent?->rent_amount) ? 0 : $excess_rent->rent_amount,
            'rental_period_year' => is_null($excess_rent?->rental_period_year) ? 0 : $excess_rent->rental_period_year,
            'annual_deduction_limit' => is_null($excess_rent?->annual_deduction_limit) ? 0 : $excess_rent->annual_deduction_limit,
            'applicable_deduction_limit' => is_null($excess_rent?->applicable_deduction_limit) ? 0 : $excess_rent->applicable_deduction_limit,
            'amount_rent_reintegrated' => is_null($excess_rent?->amount_rent_reintegrated) ? 0 : $excess_rent->amount_rent_reintegrated,
        ]);
    }

    public function render()
    {
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.detail-excess-rent');
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
        $applicable_deduction_limit = $this->annual_deduction_limit * $this->rental_period_year / 365;
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
