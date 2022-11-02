<?php

namespace App\Http\Livewire;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use App\Fiscality\RADetails\RADetail;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class AccountingResultLivewire extends Component
{
    public $company;

    public $calculIncome;

    public $totalSteps = 4;

    public $currentStep = 1;

    public $income_data = [];

    public $income = [];

    public $expense = [];

    public $inputs;

    public function addIncomeInput()
    {
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '', 'type' => 'income']);
    }

    public function addExpenseInput()
    {
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '',  'type' => 'expense']);
    }

    public function removeInput($key)
    {
        $this->inputs->pull($key);
    }

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

    public function submit()
    {
        $this->validate();
    }

    public function mount($company)
    {
        $income = IncomeExpense::where('type', 'income')->get();

        $this->currentStep = 1;
        $this->company = $company;
        $this->fill([
            'inputs' => collect($income),
        ]);
    }

    public function render()
    {
        $income = IncomeExpense::where('type', 'income')->get();
        $this->expense = IncomeExpense::where('type', 'expense')->get();

        return view('livewire.accounting-result-livewire', [
            'company' => $this->company,
            'incomes' => $income,
            'expenses' => $this->expense,
        ]);
    }

    public function determinateAccount()
    {
        $this->currentStep = 2;
        $this->calculIncome = 1;
    }

    public function determinateManualAccount()
    {
        $this->currentStep = 3;
    }

    public function increaseStep()
    {
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();

        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function nextStep()
    {
        $validated = $this->validate();

        if ($this->calculIncome == 1) {
            $this->income_data = $this->inputs;
        }

        $this->calculIncome++;
        if ($this->calculIncome == 2) {
            $this->income_data = $this->inputs;
            $this->inputs = collect($this->expense);
        }

        if ($this->calculIncome > 3) {
            $this->calculIncome = 3;

            $this->store();
        }
    }

    public function stepBack()
    {
        $this->calculIncome = 1;
    }

    public function returnBack()
    {
        $this->currentStep = 1;
    }

    private function processData(Collection $data, AccountingResult $accounting_result): array
    {
        $reform_income_data = [];
        $code = Carbon::now()->year.'_'.$this->company->id;

        for ($i = 0; $i < count($data); $i++) {
            RADetail::create(
                [
                    'account' => (int) $data[$i]['account'],
                    'name' => $data[$i]['name'],
                    'amount' => (int) $data[$i]['amount'],
                    'company_id' => $this->company->id,
                    'code' => Str::slug($data[$i]['name']).'_'.Carbon::now()->year.'_'.$this->company->id,
                    'accounting_result_id' => $accounting_result->id,
                ]
            );
        }

        return $reform_income_data;
    }

    private function processDataTotalAmount(Collection $data): float
    {
        $income_total_amount = 0;
        for ($i = 0; $i < count($this->income_data); $i++) {
            $income_total_amount += (float) $this->income_data[$i]['account'];
        }

        return $income_total_amount;
    }

    /**
     * @return  string
     */
    public function store()
    {
        $total_income_data = $this->processDataTotalAmount($this->income_data);
        $total_expenses_data = $this->processDataTotalAmount($this->inputs);

        $accounting_result = AccountingResult::create([
            'total_incomes' => $total_income_data,
            'total_expenses' => $total_expenses_data,
            'ar_value' => $total_income_data + $total_expenses_data,
            'company_id' => $this->company->id,
        ]);

        $this->processData($this->income_data, $accounting_result);
        $this->processData($this->inputs, $accounting_result);

        return route('work.accountResult');
    }
}
