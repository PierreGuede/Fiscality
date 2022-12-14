<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\AssistanceCosts\AssistanceCost;
use App\Fiscality\GeneralCostDetails\GeneralCostDetail;
use App\Fiscality\GeneralCosts\GeneralCost;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class DetailAssistanceCost extends Component
{
    public bool  $open_a_side = false;

    public string  $response = 'no';

    public $general_cost;

    public $company;

    public $inputs;

    public $inputsAssistance;

    public $arr_sum;

    public $fat_amount;

    public $assistance_cost;

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

    public function mount($company)
    {
        $expense = IncomeExpense::where('type', 'expense')->where('id', '!=', '5')->get();
        $this->general_cost = $expense;
        $this->currentStep = 1;
        $this->company = $company;

        $this->general_cost_detail = GeneralCostDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();
        $this->assistance_cost = AssistanceCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->fill([
            'inputs' => collect($this->general_cost_detail),
            'arr_sum' => $this->reformInputsDataForArraySum(collect($this->general_cost_detail)),
            'fat_amount' => is_null($this->assistance_cost?->fat_amount) ? 0 : $this->assistance_cost->fat_amount,
        ]);
    }

    public function render()
    {
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.detail-assistance-cost');
    }

    public function reformInputsDataForArraySum(Collection $data)
    {
        for ($i = 0; $i < count($data); $i++) {
            $data[$i] = $data[$i]['amount'];
        }

        return $data;
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
        foreach ($this->inputs as $key => $value) {
            array_push($total, $value['amount']);
        }
        $total_sum = array_sum($total);
        $generalCost = GeneralCost::create([
            'total_amount' => $total_sum,
            'company_id' => $this->company->id,
        ]);
        foreach ($this->inputs as $key => $value) {
            GeneralCostDetail::create([
                'compte' => $value['account'],
                'designation' => $value['name'],
                'amount' => $value['amount'],
                'general_cost_id' => $generalCost->id,
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
    }
}
