<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\AssistanceCosts\AssistanceCost;
use App\Fiscality\GeneralCostDetails\GeneralCostDetail;
use App\Fiscality\GeneralCosts\GeneralCost;
use App\Fiscality\RADetails\RADetail;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateAssistanceCost extends Component
{
    public bool  $open_a_side = false;

    public string  $response = 'no';

    public $general_cost;

    public $company;

    public $inputs;

    public $inputsAssistance;

    public $arrayLimit = [];

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'inputs.*.account' => 'required|distinct|integer',
        'inputs.*.name' => 'required',
        'inputs.*.amount' => 'required',
        'fat_amount' => 'required',
    ];

    protected $messages = [
        'inputs.*.account.required' => 'champ obligatoire',
        'inputs.*.account.distinct' => 'incohérent',
        'inputs.*.name.required' => 'champ obligatoire',
        'inputs.*.amount' => 'champ obligatoire',
        'fat_amount.required' => 'champ obligatoire',
    ];

    public function add(): void
    {
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '']);
    }

    public function remove($key): void
    {
        $this->inputs->pull($key);
    }

    public function mount($company)
    {
        $expense = RADetail::whereCompanyId($company->id)->where('type', 'expense')->where('account', '!=', '60')->get();
        $this->general_cost = $expense;
        $this->company = $company;

//        $this->arrayLimit = $h``
        $this->fill([
            'inputs' => collect($this->general_cost),
        ]);
    }

    public function render()
    {
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.create-assistance-cost');
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
        $total_sum = array_sum(array_column($this->inputs->toArray(), 'amuont'));

        try {
            DB::beginTransaction();

            $generalCost = GeneralCost::create([
                'total_amount' => $total_sum,
                'company_id' => $this->company->id,
            ]);
            foreach ($this->inputs as $key => $value) {
                GeneralCostDetail::create([
                    'account' => $value['account'],
                    'name' => $value['name'],
                    'amount' => $value['amount'],
                    'general_cost_id' => $generalCost->id,
                    'company_id' => $this->company->id,
                ]);
            }

            AssistanceCost::create([
                'fat_amount' => $this->inputsAssistance['fat_amount'],
                'general_cost' => $total_sum,
                'limit_deduction' => ($total_sum) * 0.5,
                'reintegrate_amount' => $this->inputsAssistance['fat_amount'] - (($total_sum) * 0.5),
                'company_id' => $this->company->id,
            ]);

            $this->emit('refresh');
            $this->closeASide();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
