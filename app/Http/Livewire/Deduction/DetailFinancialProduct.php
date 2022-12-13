<?php

namespace App\Http\Livewire\Deduction;

use App\Models\FinancialProductDetail;
use Carbon\Carbon;
use Livewire\Component;

class DetailFinancialProduct extends Component
{
    public $financialCost;

    public $company;

    public FinancialProductDetail $first_financial_product;

    public FinancialProductDetail $second_financial_product;

    public bool  $open_a_side = false;

    public $product_net_ircm_amount;

    public $product_rate;

    public $product_amount_deduct = 70;

    public $other_net_ircm_amount;

    public $other_rate;

    public $other_amount_deduct = 100;

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

        $this->fill([
            'product_net_ircm_amount' => $this->first_financial_product->net_ircm_amount,
            'product_rate' => $this->first_financial_product->rate,
            'other_net_ircm_amount' => $this->second_financial_product->net_ircm_amount,
            'other_rate' => $this->second_financial_product->rate,

        ]);
    }

    public function render()
    {
        return view('livewire.deduction.detail-financial-product');
    }

    public function openASide()
    {
        $this->open_a_side = true;
    }

    public function closeASide()
    {
        $this->open_a_side = false;
    }
}
