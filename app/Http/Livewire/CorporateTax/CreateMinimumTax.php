<?php

namespace App\Http\Livewire\CorporateTax;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Bases\Base;
use App\Fiscality\Categories\Category;
use App\Fiscality\Companies\Company;
use App\Fiscality\TypeImpots\TypeImpot;
use App\Models\GuruMinimumTax;
use App\Models\MinimumTax;
use App\Models\MinimumTaxDetail;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class CreateMinimumTax extends ModalComponent
{
    use Actions;

    public Amortization $model;

    public $company;

    public $base;

    public $guruMinimumTax;

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
        $this->getCompanyMinimumTax();

        $this->fill([
            'inputs' => collect($this->guruMinimumTax),
        ]);
    }

    public function render()
    {
        return view('livewire.corporate-tax.create-minimum-tax');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function getCompanyMinimumTax()
    {
        $category = Category::whereCode(Category::IMPOT_MINIMUM)->first();

        $detail_type = $this->company->detailType;

        for ($i = 0; $i < count($detail_type); $i++) {
            if ($detail_type[$i]->category_id == $category->id) {
                $this->base = $detail_type[$i]->base;
            }
        }

        $this->guruMinimumTax = GuruMinimumTax::whereType($this->base->code == Base::PRODUIT_ENCAISSABLE ? GuruMinimumTax::COLLECTABLE_PRODUCT : GuruMinimumTax::VOLUME)->get();
    }

    public function save()
    {
        try {
            DB::beginTransaction();

            $typeImpot = TypeImpot::whereCode(TypeImpot::IS)->first();
            $minimumtax = MinimumTax::create([
                'total' => array_sum(array_column($this->inputs->toArray(), 'amount')),
                'type' => $this->guruMinimumTax[0]->type,
                'company_id' => $this->company->id,
                'user_id' => auth()->user()->id,
                'type_impot_id' => $typeImpot->id,
            ]);

            for ($i = 0; $i < count($this->inputs); $i++) {
                MinimumTaxDetail::create([
                    'account' => $this->inputs[$i]['account'],
                    'name' => $this->inputs[$i]['name'],
                    'amount' => $this->inputs[$i]['amount'],
                    'type' => $this->guruMinimumTax[0]->type,
                    'company_id' => $this->company->id,
                    'user_id' => auth()->user()->id,
                    'minimum_tax_id' => $minimumtax->id,
                    'type_impot_id' => $typeImpot->id,
                ]);
            }

            DB::commit();

            $this->emit('updateMaxValue');
            $this->emit('updateMinimumTax');

            $this->notification()->success('Succès', 'Opération effectuée avec succès!');

            $this->closeModal();
        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }
    }
}
