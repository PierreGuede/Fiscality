<?php

namespace App\Http\Livewire\Deduction;

use App\Fiscality\Companies\Company;
use App\Models\Deduction;
use App\Models\FinancialProduct;
use Carbon\Carbon;
use Livewire\Component;
use WireUi\Traits\Actions;

class EditDeduction extends Component
{
    use Actions;

    public Company $company;

    public Deduction $deduction;

    public $total_financial_product;

    public $reversals_provisions;

    public $capital_gain;

    public $currency_transaction_change;

    public $listeners = ['refreshFinancialCost', 'refreshDeductionData'];

    public $rules = [
        'reversals_provisions' => 'required|min:1',
        //        'total_fiancial_product' => 'required|min:1',
        'capital_gain' => 'required|min:1',
        'currency_transaction_change' => 'required|min:1',
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
        $this->deduction = Deduction::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();

//        $this->refreshFinancialCost();
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
        return view('livewire.deduction.edit-deduction');
    }

    public function save()
    {
        $this->validate();

        $total_deduction = $this->reversals_provisions + $this->total_financial_product + $this->capital_gain + $this->currency_transaction_change;
        $this->deduction->fill([
            'reversals_provisions' => $this->reversals_provisions,
            'total_financial_product' => $this->total_financial_product,
            'capital_gain' => $this->capital_gain,
            'currency_transaction_change' => $this->currency_transaction_change,
            'total_deduction' => $total_deduction,
            'company_id' => $this->company->id,
        ]);

        $this->deduction->save();

        $this->emit('refreshState');
        $this->notification()->success('Succès', 'Opération effectuée avec succès!');
    }

    public function refreshDeductionData()
    {
        $this->refreshFinancialCost();

        $total_deduction = $this->reversals_provisions + $this->total_financial_product + $this->capital_gain + $this->currency_transaction_change;
        $this->deduction->fill([
            'reversals_provisions' => $this->reversals_provisions,
            'total_financial_product' => $this->total_financial_product,
            'capital_gain' => $this->capital_gain,
            'currency_transaction_change' => $this->currency_transaction_change,
            'total_deduction' => $total_deduction,
            'company_id' => $this->company->id,
        ]);

        $this->deduction->save();

        $this->emit('refreshState');
    }

    public function refreshFinancialCost()
    {
        $data = FinancialProduct::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->total_financial_product = is_null($data) ? 0 : $data->total_financial_product_amount;
    }
}
