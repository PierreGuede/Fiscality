<?php

namespace App\Http\Livewire\Deduction;

use App\Models\FinancialProduct;
use App\Models\FinancialProductDetail;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateFinancialProduct extends Component
{
    public $financialCost;

    public $company;

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
    }

    public function render()
    {
        return view('livewire.deduction.create-financial-product');
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

//        protected $fillable = ['total_other_product_rcm', 'total_income_securities_issued' , 'total_financial_product_amount', 'type'];

        $total_other_product_rcm = (float) $this->product_rate * (float) $this->product_net_ircm_amount;
        $total_income_securities_issued = (float) $this->other_rate * (float) $this->other_net_ircm_amount;

        try {
            DB::beginTransaction();

            $financial_product = FinancialProduct::create([
                'total_other_product_rcm' => $total_other_product_rcm,
                'total_income_securities_issued' => $total_income_securities_issued,
                'total_financial_product_amount' => $total_other_product_rcm + $total_income_securities_issued,
                'company_id' => $this->company->id,
            ]);

            FinancialProductDetail::create([
                'net_ircm_amount' => $this->product_net_ircm_amount,
                'rate' => $this->product_rate,
                'amount_deduct' => $total_other_product_rcm,
                'type' => FinancialProductDetail::INCOME,
                'company_id' => $this->company->id,
                'financial_product_id' => $financial_product->id,
            ]);

            FinancialProductDetail::create([
                'net_ircm_amount' => $this->other_net_ircm_amount,
                'rate' => $this->other_rate,
                'amount_deduct' => $total_income_securities_issued,
                'type' => FinancialProductDetail::OTHER,
                'company_id' => $this->company->id,
                'financial_product_id' => $financial_product->id,
            ]);

            DB::commit();

            $this->emit('refreshFinancialCost');
            $this->closeASide();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
