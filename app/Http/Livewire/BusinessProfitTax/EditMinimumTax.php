<?php

namespace App\Http\Livewire\BusinessProfitTax;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\TypeImpots\TypeImpot;
use App\Models\MinimumTax;
use App\Models\MinimumTaxDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;

class EditMinimumTax extends ModalComponent
{
    public Amortization $model;

    public $company;

    public $base;

    public $minimumDetail;

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
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '']);
    }

    public function remove($key)
    {
        $this->inputs->pull($key);
    }

    public function mount(Company $company)
    {
        $this->company = $company;
        $this->minimumDetail = MinimumTaxDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();

        $this->fill([
            'inputs' => collect($this->minimumDetail),
        ]);
    }

    public function render()
    {
        return view('livewire.business-profit-tax.edit-minimum-tax');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function save()
    {
        try {
            DB::beginTransaction();

            $iba = TypeImpot::whereCode(TypeImpot::IBA)->first();
            $minimumtax = MinimumTax::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->whereTypeImpotId($iba->id)->first();

            $minimumtax->fill([
                'total' => array_sum(array_column($this->inputs->toArray(), 'amount')),
                'type' => $this->minimumDetail[0]->type,
            ]);

            $minimumtax->save();

            for ($i = 0; $i < count($this->inputs); $i++) {
                MinimumTaxDetail::updateOrCreate([
                    'account' => $this->inputs[$i]['account'],
                ], [
                    'name' => $this->inputs[$i]['name'],
                    'amount' => $this->inputs[$i]['amount'],
                    'type' => $this->minimumDetail[0]->type,
                    'company_id' => $this->company->id,
                    'user_id' => auth()->user()->id,
                    'minimum_tax_id' => $minimumtax->id,
                    'type_impot_id' => $iba->id
                ]);
            }

            DB::commit();

            $this->emit('updateMaxValue');

            $this->closeModal();
        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }
    }
}
