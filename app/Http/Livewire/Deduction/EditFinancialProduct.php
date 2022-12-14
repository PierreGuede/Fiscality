<?php

namespace App\Http\Livewire\Deduction;

use App\Models\FinancialProduct;
use App\Models\FinancialProductDetail;
use Carbon\Carbon;
use Livewire\Component;

class EditFinancialProduct extends Component
{
    public $financialCost;

    public $company;

    public FinancialProductDetail $first_financial_product;

    public FinancialProductDetail $second_financial_product;

    public bool  $open_a_side = false;

    public $product_net_ircm_amount;

    public $product_rate = 70;

    public $product_amount_deduct = 0;

    public $other_net_ircm_amount;

    public $other_rate = 100;

    public $other_amount_deduct = 0;

    public $rules = [
        'product_net_ircm_amount' => 'required|min:1',
        'product_rate' => 'required|min:1',
        //        'product_amount_deduct' => 'required|min:1',
        'other_net_ircm_amount' => 'required|min:1',
        'other_rate' => 'required|min:1',
        //        'other_amount_deduct' => 'required|min:1'
    ];

    public string  $response = 'no';

    protected $listeners = ['openASide', 'closeASide'];

    public function mount($company)
    {
        $this->company = $company;
        $this->first_financial_product = FinancialProductDetail::whereType(FinancialProductDetail::INCOME)->whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->second_financial_product = FinancialProductDetail::whereType(FinancialProductDetail::OTHER)->whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->product_rate = $this->first_financial_product->rate;
        $this->other_rate = $this->second_financial_product->rate;

        $this->fill([
            'product_net_ircm_amount' => $this->first_financial_product->net_ircm_amount,
            'product_rate' => $this->first_financial_product->rate,
            'other_net_ircm_amount' => $this->second_financial_product->net_ircm_amount,
            'other_rate' => $this->second_financial_product->rate,

        ]);
    }

    public function render()
    {
        return view('livewire.deduction.edit-financial-product');
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

        $total_other_product_rcm = (float) $this->product_rate * (float) $this->product_net_ircm_amount;
        $total_income_securities_issued = (float) $this->other_rate * (float) $this->other_net_ircm_amount;

        $financial_product = FinancialProduct::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $financial_product->fill([
            'total_other_product_rcm' => $total_other_product_rcm,
            'total_income_securities_issued' => $total_income_securities_issued,
            'total_financial_product_amount' => $total_other_product_rcm + $total_income_securities_issued,
        ]);

        $financial_product->save();

        $this->first_financial_product->fill([
            'net_ircm_amount' => $this->product_net_ircm_amount,
            'rate' => $this->product_rate,
            'amount_deduct' => $total_other_product_rcm,
        ]);

        $this->first_financial_product->save();

        $this->second_financial_product->fill([
            'net_ircm_amount' => $this->other_net_ircm_amount,
            'rate' => $this->other_rate,
            'amount_deduct' => $total_income_securities_issued,
        ]);
        $this->second_financial_product->save();

        $this->emit('refreshFinancialCost');

        $this->closeASide();
    }
}
