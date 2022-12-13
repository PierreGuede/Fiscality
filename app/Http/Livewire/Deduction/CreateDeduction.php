<?php

namespace App\Http\Livewire\Deduction;

use App\Fiscality\Companies\Company;
use App\Models\Deduction;
use App\Models\FinancialProduct;
use Carbon\Carbon;
use Livewire\Component;

class CreateDeduction extends Component
{
    public Company $company;

    public $total_financial_product;

    public $reversals_provisions = 0;

    public $capital_gain = 0;

    public $currency_transaction_change = 0;

    public $listeners = ['refreshFinancialCost'];

    public $rules = [
        'reversals_provisions' => 'required',
        //        'total_fiancial_product' => 'required|min:1',
        'capital_gain' => 'required',
        'currency_transaction_change' => 'required',
    ];

    public $messages = [
        'reversals_provisions' => 'champ obligatoire',
        //        'total_fiancial_product' => 'champ obligatoire',
        'capital_gain' => 'champ obligatoire',
        'currency_transaction_change' => 'champ obligatoire',
    ];

    public function mount(Company $company)
    {
        $this->company = $company;
        $this->refreshFinancialCost();
    }

    public function render()
    {
        return view('livewire.deduction.create-deduction');
    }

    public function save()
    {
//        $this->validate();

        $total_deduction = $this->reversals_provisions + $this->total_financial_product + $this->capital_gain + $this->currency_transaction_change;
        Deduction::create([
            'reversals_provisions' => $this->reversals_provisions,
            'total_financial_product' => $this->total_financial_product,
            'capital_gain' => $this->capital_gain,
            'currency_transaction_change' => $this->currency_transaction_change,
            'total_deduction' => $total_deduction,
            'company_id' => $this->company->id,
        ]);

        $this->emit('refreshState');
    }

    public function refreshFinancialCost()
    {
        $data = FinancialProduct::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->total_financial_product = is_null($data) ? 0 : $data->total_financial_product_amount;
    }
}
