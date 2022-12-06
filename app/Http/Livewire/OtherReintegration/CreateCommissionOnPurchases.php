<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\CommissionOnPurchaseDetails\CommissionOnPurchaseDetail;
use App\Fiscality\CommissionOnPurchases\CommissionOnPurchase;
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
        $this->inputs->push(['Account' => '', 'designation' => '', 'total' => '', 'amount_commission' => '', 'limit' => '', 'no_deductible_amount' => '']);
    }

    public function remove($key): void
    {
        $this->inputs->pull($key);
    }

    public function mount($company)
    {
        $this->redevances = [];
        $this->currentStep = 1;
        $this->company = $company;
        $this->fill([
            'inputs' => collect($this->redevances),
        ]);
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

        $total = [];
        foreach ($this->inputs as $value) {
            array_push($total, $value['total']);
        }
        $total_sum = array_sum($total);
        $commission_create = CommissionOnPurchase::create([
            'renseigned_commission' => $total_sum,
            'company_id' => $this->company->id,
        ]);
        foreach ($this->inputs as $value) {
            $this->total_limit = $value['total'] * 0.05;
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
}
