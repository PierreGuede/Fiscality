<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\AssistanceCosts\AssistanceCost;
use App\Fiscality\GeneralCostDetails\GeneralCostDetail;
use App\Fiscality\GeneralCosts\GeneralCost;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class EditAssistanceCost extends Component
{
    public bool  $open_a_side = false;

    public string  $response = 'no';

    public $general_cost;

    public $rate = 5;

    public $company;

    public $inputs;

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
        $expense = IncomeExpense::where('type', 'expense')->where('id', '!=', '5')->get();
        $this->general_cost = $expense;
        $this->currentStep = 1;
        $this->company = $company;

        $this->general_cost_detail = GeneralCostDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();
        $this->assistance_cost = AssistanceCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->fill([
            'inputs' => collect($this->general_cost_detail),
            'arr_sum' => $this->reformInputsDataForArraySum(collect($this->general_cost_detail)),
            'fat_amount' => is_null( $this->assistance_cost?->fat_amount)  ? 0 :  $this->assistance_cost->fat_amount,
        ]);
    }

    public function render()
    {
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.edit-assistance-cost');
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

    public function save()
    {
        $total = [];
        foreach ($this->inputs as $key => $value) {
            array_push($total, $value['amount']);
        }
        $total_sum = array_sum($total);

        $general_cost = GeneralCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $general_cost->fill([
            'total_amount' => $total_sum,
        ]);

        $general_cost->save();

        foreach ($this->inputs as $key => $value) {
            GeneralCostDetail::updateOrCreate(
                ['account' => $value['account']],
                [
                    'name' => $value['name'],
                    'amount' => $value['amount'],
                    'general_cost_id' => $general_cost->id,
                    'company_id' => $this->company->id,
                ]);
        }

        $this->assistance_cost->fill([
            'fat_amount' => $this->fat_amount,
            'general_cost' => $total_sum,
            'limit_deduction' => ($total_sum) * (5 / 100),
            'reintegrate_amount' => (float) $this->fat_amount - (($total_sum) * (5 / 100)),
            'company_id' => $this->company->id,
        ]);

        $this->assistance_cost->save();

        $this->emit('refreshExcessRent');
        $this->closeASide();
    }
}
