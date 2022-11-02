<?php

namespace App\Http\Livewire;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Companies\Company;
use App\Fiscality\IMCalculs\IMCalcul;
use App\Fiscality\IMItems\IMItem;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use Livewire\Component;

class WorkInCompany extends Component
{
    public Company $company;

    public string $name;

    public array $incomeList = [];

    public float $incomeSum;

    public array $expenseList = [];

    public float $expenseSum;

    public array $imList = [];

    public float $imsum;

    public float $calculIncome;

    public $ar_value;

    public int $totalSteps = 2;

    public int $currentStep = 1;

    public function mount($company)
    {
        $this->company = $company;
    }

    public function render()
    {
        $income = IncomeExpense::where('type', 'income')->get();
        $expense = IncomeExpense::where('type', 'expense')->get();
        $im = IMItem::all();
        $produit = AccountingResult::where('company_id', $this->company->id)->first();

        return view('livewire.work-in-company', [
            'company' => $this->company,
            'income' => $income,
            'expense' => $expense,
            'produit' => $produit,
            'im' => $im,
        ]);
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        if ($this->name == $this->company->name) {
            $this->currentStep++;
            if ($this->currentStep > $this->totalSteps) {
                $this->currentStep = $this->totalSteps;
            }
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

    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'name' => ['required'],
            ]);
        }
    }

    public function sumIncome()
    {
        $this->incomeSum = array_sum($this->incomeList);
    }

    public function sumExpense()
    {
        $this->expenseSum = array_sum($this->expenseList);
    }

    public function saveAccountingResult($id)
    {
        AccountingResult::create([
            'company_id' => $id,
            'total_incomes' => $this->incomeSum,
            'total_expenses' => $this->expenseSum,
            'ar_value' => $this->incomeSum - $this->expenseSum,
        ]);
        $this->currentStep = 2;
    }

    public function saveManualAccountingResult($id)
    {
        AccountingResult::create([
            'company_id' => $id,
            'total_incomes' => 0,
            'total_expenses' => 0,
            'ar_value' => $this->ar_value,
        ]);
        $this->currentStep = 2;
    }

    public function returnBack()
    {
        $this->currentStep = 2;
    }

    public function AccountResult()
    {
        $this->currentStep = 3;
    }

    public function determinateAccount()
    {
        $this->currentStep = 4;
        $this->calculIncome = 1;
    }

    public function determinateManualAccount()
    {
        $this->currentStep = 5;
    }

    public function increateIncome()
    {
        $this->calculIncome++;
        if ($this->calculIncome > 3) {
            $this->calculIncome = 3;
        }
    }

    public function decreateIncome()
    {
        $this->calculIncome = 1;
    }

    public function impotcalcul()
    {
        $this->currentStep = 6;
    }

    public function sumItems()
    {
        $this->imsum = array_sum($this->imList);
    }

    public function GenerateItem($id, $totalProduct)
    {
        IMCalcul::create([
            'company_id' => $id,
            'total_items' => $this->imsum,
            'total_im' => $totalProduct - $this->imsum,
        ]);
        $this->currentStep = 2;
    }

    public function company()
    {
    }
}
