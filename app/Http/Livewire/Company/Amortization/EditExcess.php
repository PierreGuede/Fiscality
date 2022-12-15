<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Excesss\Excess;
use App\Fiscality\Vehicles\Vehicle;
use App\Models\ExcessAmortzationCategory;
use App\Models\ExcessAmortzationCategoryItem;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class EditExcess extends ModalComponent
{
    use Actions;

    public ?Excess $excess;

    public $excessAmortzationCategory;

    public $excessAmortzationCategoryItem;

    public $rate = 0;

    public $selected_excess_amortzation_category;

    public Vehicle $amortisation;

    public $company;

    public $data = [
        'category_imo' => 1,
        'excess_amortzation_category_item_id' => '',
        'taux_use' => 0,
        'taux_recommended' => 0,
        'dotation' => 0,
        //        'ecart' => 0,
        //        'deductible_amortization' => 0,
    ];

    public $rules = [
//        'data.category_imo' => 'required|min:1',
        'data.excess_amortzation_category_item_id' => 'required|min:1',
        'data.dotation' => 'required|numeric|min:1',
        'data.taux_use' => 'required|numeric|between:0.01,100',
        'data.taux_recommended' => 'required|numeric|between:0.1,100',
    ];

    public $messages = [
        'data.category_imo.required' => 'champ obligatoire',
        'data.excess_amortzation_category_item_id.required' => 'champ obligatoire',
        'data.dotation.required' => 'champ obligatoire',
        'data.taux_use.required' => 'champ obligatoire',
        'data.taux_use.numeric' => 'invalid',
        'data.taux_use.between' => 'invalid',
        'data.taux_recommended.required' => 'champ obligatoire',
        'data.taux_recommended.numeric' => 'invalid',
        'data.taux_recommended.between' => 'invalid',

    ];

    public function mount(int $excess)
    {
        $this->excess = Excess::whereId($excess)->first();
        $this->excessAmortzationCategory = ExcessAmortzationCategory::all();

        $res = ExcessAmortzationCategoryItem::whereId($this->excess->excess_amortzation_category_item_id)->first();
        $this->data['taux_recommended'] = $res->rate;

        $selectedExcessAmortizationCategoryItem = ExcessAmortzationCategoryItem::whereId($this->excess->excess_amortzation_category_item_id)->first();
        $this->data['category_imo'] = $selectedExcessAmortizationCategoryItem->id;

        $this->excessAmortzationCategoryItem = ExcessAmortzationCategoryItem::where('excess_amortzation_category_id', $this->data['category_imo'])->get();

        $this->fill([
//            'category_imo' => $this->excess->category_imo,
            'data.excess_amortzation_category_item_id' => $this->excess->excess_amortzation_category_item_id,
            'data.taux_use' => $this->excess['taux_use'],
            'data.taux_recommended' => $this->excess['taux_recommended'],
            'data.dotation' => $this->excess['dotation'],
        ]);
    }

    public function updatedData($value, $key)
    {
        if ($key == 'category_imo') {
            $this->excessAmortzationCategoryItem = ExcessAmortzationCategoryItem::where('excess_amortzation_category_id', $value)->get();
            $this->data['excess_amortzation_category_item_id'] = $this->excessAmortzationCategoryItem[0]->id;
            $this->data['taux_recommended'] = $this->excessAmortzationCategoryItem[0]->rate;
        }

        if ($key == 'taux_recommended') {
            $res = ExcessAmortzationCategoryItem::whereId($this->data[$key])->first();
            $this->data['taux_recommended'] = $res->rate;
        }
    }

    public function render()
    {
        return view('livewire.company.amortization.edit-excess');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function save()
    {

        $this->validate();
        try {
            DB::beginTransaction();

            $ecart = (float) $this->data['taux_use'] - (float) $this->data['taux_recommended'];
            $deductibleAmortization = ((float) $this->data['dotation'] * (float) $ecart) / (float) $this->data['taux_use'];
            $this->excess->fill([
                //                'category_imo' => $this->data['category_imo'],
                'excess_amortzation_category_item_id' => $this->data['excess_amortzation_category_item_id'],
                'taux_use' => $this->data['taux_use'],
                'taux_recommended' => $this->data['taux_recommended'],
                'ecart' => $ecart,
                'dotation' => $this->data['dotation'],
                'deductible_amortization' => $deductibleAmortization,
            ]);

            $this->excess->save();

            DB::commit();
            return redirect(request()->header('Referer'));

        } catch (\Throwable $th) {
            DB::rollBack();

            return $th;
        }
    }
}
