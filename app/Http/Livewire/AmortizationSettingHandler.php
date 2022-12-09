<?php

namespace App\Http\Livewire;

use App\Fiscality\Companies\Company;
use App\Models\AmortizationSetting;
use App\Models\GuruAmortizationSetting;
use Livewire\Component;
use WireUi\Traits\Actions;

class AmortizationSettingHandler extends Component
{
    use Actions;

    public $depreciation_base_limit;

    public $recommended_rate;

    public $guruAmortizationSetting;

    public bool  $edit_depreciation_base_limit = true;

    public bool  $edit_recommended_rate = true;

    public ?AmortizationSetting  $amortizationSetting;

    public ?Company $company;

    public function mount($company)
    {
        $this->company = $company;
        $this->guruAmortizationSetting = GuruAmortizationSetting::first();
        $this->amortizationSetting = AmortizationSetting::whereCompanyId($company->id)->first();

        $this->resetData();

        $this->depreciation_base_limit = is_null($this->amortizationSetting) ? $this->guruAmortizationSetting->depreciation_base_limit : $this->amortizationSetting->depreciation_base_limit;
        $this->recommended_rate = is_null($this->amortizationSetting) ? $this->guruAmortizationSetting->recommended_rate : $this->amortizationSetting->recommended_rate;
    }

    public function render()
    {
        return view('livewire.amortization-setting-handler');
    }

    public function editDepreciationBaseLimit()
    {
        $this->edit_depreciation_base_limit = ! $this->edit_depreciation_base_limit;

        if ($this->edit_depreciation_base_limit) {
            $this->amortizationSetting->depreciation_base_limit = $this->depreciation_base_limit;
            $this->amortizationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

    public function resetDepreciationBaseLimit()
    {
        $this->depreciation_base_limit = $this->guruAmortizationSetting->depreciation_base_limit;
        $this->amortizationSetting->depreciation_base_limit = $this->guruAmortizationSetting->depreciation_base_limit;
        $this->amortizationSetting->save();
        $this->notification()->success(
            'Succès',
            'Réinitialisation effectuée avec succès!'
        );
    }

    public function editRecommendedRate()
    {
        $this->edit_recommended_rate = ! $this->edit_recommended_rate;
        if ($this->edit_recommended_rate) {
            $this->amortizationSetting->recommended_rate = $this->recommended_rate;
            $this->amortizationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

    public function resetRecommendedRate()
    {
        $this->recommended_rate = $this->guruAmortizationSetting->recommended_rate;
        $this->amortizationSetting->recommended_rate = $this->guruAmortizationSetting->recommended_rate;
        $this->amortizationSetting->save();
        $this->notification()->success(
            'Succès',
            'Réinitialisation effectuée avec succès!'
        );
    }

    public function resetData()
    {
//        if ($this->amortizationSetting != null){
//          AmortizationSetting::softDeleted($this->amortizationSetting->id);
//        }

        if ($this->amortizationSetting == null) {
            AmortizationSetting::create([
                'depreciation_base_limit' => $this->guruAmortizationSetting->depreciation_base_limit,
                'recommended_rate' => $this->guruAmortizationSetting->recommended_rate,
                'company_id' => $this->company->id,
                'user_id' => auth()->user()->id,
            ]);
        }
    }

    public function toggleEditDepreciationBaseLimit()
    {
        $this->edit_depreciation_base_limit = ! $this->edit_depreciation_base_limit;
    }

    public function toggleEditRecommendedRate()
    {
        $this->edit_recommended_rate = ! $this->edit_recommended_rate;
    }
}
