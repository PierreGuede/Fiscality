<?php

namespace App\Http\Livewire\AccountResult;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\RADetails\RADetail;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use LivewireUI\Modal\ModalComponent;

class EditIncome extends ModalComponent
{
    public Amortization $model;

    public $company;

    public $expense_inputs;

    public $accounting_result;

    public $expense;

    public $data;

    public $inputs;

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

    public function add()
    {
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '', 'type' => 'income']);
    }

    public function remove($key)
    {
        $this->inputs->pull($key);
    }

    public function mount(Company $company)
    {
        $this->company = $company;

        $data = RADetail::whereCompanyId($this->company->id)->where('type', 'income')->get();

        $this->accounting_result = AccountingResult::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->company = $company;
        $this->fill([
            'inputs' => collect($data),
        ]);
    }

    public function render()
    {
        $this->data = RADetail::whereCompanyId($this->company->id)->where('type', 'income')->get();

        return view('livewire.account-result.edit-income', [
            'company' => $this->company,
            'data' => $this->data,
        ]);
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    private function processData(Collection $data, AccountingResult $accounting_result): array
    {
        $reform_income_data = [];
        $code = Carbon::now()->year.'_'.$this->company->id;

        for ($i = 0; $i < count($data); $i++) {
            RADetail::upsert(
                [
                    'id' => $data[$i]['id'],
                    'account' => (int) $data[$i]['account'],
                    'name' => $data[$i]['name'],
                    'amount' => (int) $data[$i]['amount'],
                    'company_id' => $this->company->id,
                    'code' => Str::slug($data[$i]['name']).'_'.Carbon::now()->year.'_'.$this->company->id,
                    'accounting_result_id' => $accounting_result->id,
                ], ['id', 'code']);
        }

        return $reform_income_data;
    }

    private function processDataTotalAmount(Collection $data): float
    {
        $income_total_amount = 0;
        for ($i = 0; $i < count($data); $i++) {
            $income_total_amount += (float) $data[$i]['amount'];
        }

        return $income_total_amount;
    }

    /**
     * @return  string
     */
    public function save()
    {
//        dd($this->inputs);

        $this->validate();

        $total_data = $this->processDataTotalAmount($this->inputs);

        $exist = AccountingResult::whereCompanyId($this->company->id)->first();

        if (is_null($exist)) {
            $accounting_result = AccountingResult::create([
                'total_incomes' => 0,
                'total_expenses' => $total_data,
                'ar_value' => $total_data + 0,
                'company_id' => $this->company->id,
            ]);
            $this->processData($this->inputs, $accounting_result);
        } else {
            $exist->total_incomes = $total_data;
            $exist->ar_value = $exist->total_incomes - $exist->total_expenses ;
            $this->processData($this->inputs, $exist);
            $exist->save();
        }

        $this->emit('newExpense');

        $this->closeModal();

//        return route('work.accountResult');
//        $this->accounting_result = AccountingResult::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
    }
}
