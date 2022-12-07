<?php

namespace App\Http\Livewire\AccountResult;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\RADetails\RADetail;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class EditExpense extends ModalComponent
{
    use Actions;

    public Amortization $model;

    public $company;

    public $expense_inputs;

    public $accounting_result;

    public $expense;

    public $data;

    public $inputs;

    public $arr_sum = [];

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
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '', 'type' => 'expense']);
    }

    public function remove($key)
    {
        $this->inputs->pull($key);
    }

    public function mount(Company $company)
    {
        $this->company = $company;

        $data = RADetail::whereCompanyId($this->company->id)->where('type', 'expense')->get();

        $this->accounting_result = AccountingResult::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->arr_sum = array_column($data->toArray(), 'amount');

        $this->company = $company;
        $this->fill([
            'inputs' => collect($data),
        ]);
    }

    public function render()
    {
        $this->data = RADetail::whereCompanyId($this->company->id)->where('type', 'expense')->get();

        return view('livewire.account-result.edit-expense', [
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

    public function save()
    {
        $this->validate();

        $total_data = array_sum(array_column($this->inputs->toArray(), 'amount'));

        $exist = AccountingResult::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        try {
            if (is_null($exist)) {
                $accounting_result = AccountingResult::create([
                    'total_incomes' => 0,
                    'total_expenses' => $total_data,
                    'ar_value' => $total_data + 0,
                    'company_id' => $this->company->id,
                ]);
                $this->processData($this->inputs, $accounting_result);
            } else {
                $exist->total_expenses = $total_data;
                $exist->ar_value = $exist->total_incomes - $exist->total_expenses;
                $this->processData($this->inputs, $exist);
                $exist->save();
            }

            $this->emit('refreshExpense');
            $this->notification()->success(
                $title = 'Succès',
                $description = 'Charges modifiés avec succès!'
            );
            DB::commit();
            $this->closeModal();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
