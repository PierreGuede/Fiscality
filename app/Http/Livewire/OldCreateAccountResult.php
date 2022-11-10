<?php

namespace App\Http\Livewire;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use App\Fiscality\RADetails\RADetail;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;

class OldCreateAccountResult extends Component
{
    public $company;

    public $state = 'fillIn';

    public $currentStep = 1;

    public $data = [];

    public $income = [];

    public $expense = [];

    public $income_inputs;

    public $expense_inputs;

    public $total_incomes_expenses;

    public $accounting_result;

    protected $rules = [
        'income_inputs.*.account' => ['required', 'distinct', 'integer'],
        'income_inputs.*.name' => 'required',
        'income_inputs.*.amount' => 'required',
        'expense_inputs.*.account' => 'required|distinct|integer',
        'expense_inputs.*.name' => 'required',
        'expense_inputs.*.amount' => 'required',
    ];

    protected $messages = [
        'income_inputs.*.account.required' => 'champ obligatoire',
        'income_inputs.*.account.distinct' => 'incohérent',
        'income_inputs.*.name.required' => 'champ obligatoire',
        'income_inputs.*.amount' => 'champ obligatoire',
        'expense_inputs.*.account.required' => 'champ obligatoire',
        'expense_inputs.*.account.distinct' => 'incohérent',
        'expense_inputs.*.name.required' => 'champ obligatoire',
        'expense_inputs.*.amount' => 'champ obligatoire',

    ];

    public function submit()
    {
        $this->validate();
    }

    public function addIncomeInput()
    {
        $this->income_inputs->push(['account' => '', 'name' => '', 'amount' => '', 'type' => 'income']);
    }

    public function addExpenseInput()
    {
        $this->expense_inputs->push(['account' => '', 'name' => '', 'amount' => '',  'type' => 'expense']);
    }

    public function removeIncomeInput($key)
    {
        $this->income_inputs->pull($key);
    }

    public function removeExpenseInput($key)
    {
        $this->expense_inputs->pull($key);
    }

    public function toggle()
    {
        if ($this->state == 'fillIn') {
            $this->state = 'unfilled';
        } else {
            $this->state = 'fillIn';
        }
    }

    public function mount($company)
    {
        $income = IncomeExpense::where('type', 'income')->get();
        $expense = IncomeExpense::where('type', 'expense')->get();

        $this->accounting_result = AccountingResult::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();

//        dd($this->accounting_result );
        $this->currentStep = 1;
        $this->company = $company;
        $this->fill([
            'income_inputs' => collect($income),
            'expense_inputs' => collect($expense),
        ]);
    }

    public function render()
    {
        $income = IncomeExpense::where('type', 'income')->get();
        $this->expense = IncomeExpense::where('type', 'expense')->get();

        return view('livewire.old-create-account-result', [
            'company' => $this->company,
            'incomes' => $income,
            'expenses' => $this->expense,
        ]);
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

    public function storeFillInData()
    {
        Validator::make(['total_incomes_expenses' => $this->total_incomes_expenses], [
            'total_incomes_expenses' => [
                'required', 'min:1',
            ],
        ]);
        $accounting_result = AccountingResult::create([
            'total_incomes' => 0,
            'total_expenses' => 0,
            'ar_value' => (float) $this->total_incomes_expenses,
            'company_id' => $this->company->id,
        ]);
    }

    public function storeUnfilledData()
    {
        $this->validate();

        $total_income_data = $this->processDataTotalAmount($this->income_inputs);
        $total_expenses_data = $this->processDataTotalAmount($this->expense_inputs);

        $accounting_result = AccountingResult::create([
            'total_incomes' => $total_income_data,
            'total_expenses' => $total_expenses_data,
            'ar_value' => $total_income_data + $total_expenses_data,
            'company_id' => $this->company->id,
        ]);

        $this->processData($this->income_inputs, $accounting_result);
        $this->processData($this->expense_inputs, $accounting_result);
    }

    /**
     * @return  string
     */
    public function store()
    {
        if ($this->state == 'fillIn') {
            $this->storeFillInData();
        }

        if ($this->state == 'unfilled') {
            $this->storeUnfilledData();
        }

//        return route('work.accountResult');
//        $this->accounting_result = AccountingResult::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
    }
}
