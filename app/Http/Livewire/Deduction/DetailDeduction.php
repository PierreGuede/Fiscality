<?php

namespace App\Http\Livewire\Deduction;

use App\Fiscality\Companies\Company;
use App\Models\Deduction;
use Carbon\Carbon;
use Livewire\Component;

class DetailDeduction extends Component
{
    public Company $company;

    public $total_financial_product;

    public $reversals_provisions;

    public $capital_gain;

    public $currency_transaction_change;

    public $total_deduction;

    public $listeners = ['refreshFinancialCost'];

    public function mount(Company $company)
    {
        $this->company = $company;
        $this->deduction = Deduction::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->fill([
            'reversals_provisions' => $this->deduction->reversals_provisions,
            'total_financial_product' => $this->deduction->total_financial_product,
            'capital_gain' => $this->deduction->capital_gain,
            'currency_transaction_change' => $this->deduction->currency_transaction_change,
            'total_deduction' => $this->deduction->total_deduction,
        ]);
    }

    public function render()
    {
        return view('livewire.deduction.detail-deduction');
    }
}
