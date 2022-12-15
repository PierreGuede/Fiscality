<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\CommissionOnPurchaseDetails\CommissionOnPurchaseDetail;
use App\Fiscality\CommissionOnPurchases\CommissionOnPurchase;
use App\Http\Livewire\OtherReintegrationSettingHandler;
use Livewire\Component;

class CreateCommissionOnPurchases extends Component
{
    public bool  $open_a_side = false;

    public $redevances;

    public $commission_on_purchase;

    public $company;

    public $inputs;

    public $total_limit;

    public $total_deduction;

    public $rate = 5;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'inputs.*.Account' => 'required|distinct|integer',
        'inputs.*.designation' => 'required',
        'inputs.*.total' => 'required|integer',
    ];

    protected $messages = [
        'inputs.*.Account.required' => 'champ obligatoire',
        'inputs.*.Account.distinct' => 'incohérent',
        'inputs.*.designation.required' => 'champ obligatoire',
        'inputs.*.total.required' => 'champ obligatoire',
        'inputs.*.total.integer' => 'champ obligatoire',

    ];

    public function add(): void
    {
        $this->inputs->push(['Account' => 0, 'designation' => '', 'total' => 0, 'amount_commission' => 0, 'limit' => 0, 'no_deductible_amount' => 0]);
    }

    public function remove($key): void
    {
        $this->inputs->pull($key);
    }

    public function mount($company)
    {
        $otherReintegrationSettingHandler = OtherReintegrationSettingHandler::getValue($company->id);
        $this->rate = (float) $otherReintegrationSettingHandler->commission_on_purchase_deduction_limit;

        $this->redevances = [];
        $this->currentStep = 1;
        $this->company = $company;
        $this->inputs  = collect([]);
        $this->add();
    }

    public function render()
    {
        $this->redevances = [];
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.create-commission-on-purchases');
    }

    public function openASide()
    {
        $this->open_a_side = true;
    }

    public function closeASide()
    {
        $this->open_a_side = false;
    }

    public function store()
    {
        $this->validate();

        $total_sum = array_sum(array_column($this->inputs->toArray(), 'total'));
        $commission_create = CommissionOnPurchase::create([
            'renseigned_commission' => $total_sum,
            'company_id' => $this->company->id,
        ]);
        foreach ($this->inputs as $value) {
            $this->total_limit = $value['total'] * ($this->rate / 100);
            $this->total_deduction = $value['amount_commission'] - $this->total_limit;

            CommissionOnPurchaseDetail::create([
                'Account' => $value['Account'],
                'designation' => $value['designation'],
                'total' => $value['total'],
                'amount_commission' => $value['amount_commission'],
                'limit' => $this->total_limit,
                'no_deductible_amount' => $this->total_deduction,
                'commission_on_purchase_id' => $commission_create->id,
                'company_id' => $this->company->id,
            ]);
        }

        $this->emit('refresh');
        $this->closeASide();
    }

//    public static function updateOnRateChange()
//    {
//
//    }
}
