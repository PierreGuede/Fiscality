<?php

namespace App\Http\Livewire\OtherReintegration;

use Livewire\Component;

class CreateCommissionOnPurchases extends Component
{
    public bool  $open_a_side = false;

    public string  $response = 'no';

    public $redevances;

    public $commission_on_purchase;

    public $company;

    public $inputs;

    public $total_limit;

    public $total_deduction;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'inputs.*.account' => 'required|distinct|integer',
        'inputs.*.name' => 'required',
        'inputs.*.amount' => 'required',
    ];

    protected $messages = [
        'inputs.*.account.required' => 'champ obligatoire',
        'inputs.*.account.distinct' => 'incohérent',
        'inputs.*.name.required' => 'champ obligatoire',
        'inputs.*.amount' => 'champ obligatoire',

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
            ]);
        }
    }
}
