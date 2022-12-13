<?php

namespace App\Http\Livewire;

use App\Fiscality\Companies\Company;
use App\Models\DeductionSetting;
use App\Models\GuruDeductionSetting;
use Livewire\Component;
use WireUi\Traits\Actions;

class DeductionSettingHandler extends Component
{
    use Actions;

    public $rate_proceed_government;

    public $rcm_product_rate;

    public $edit_rate_proceed_government = true;

    public $edit_rcm_product_rate = true;

    public ?Company $company;

    public ?GuruDeductionSetting $guruDeductionSetting;

    public ?DeductionSetting $deductionSetting;

    public function mount($company)
    {
        $this->company = $company;
        $this->guruDeductionSetting = GuruDeductionSetting::first();
        $this->deductionSetting = DeductionSetting::whereCompanyId($company->id)->first();

        $this->resetData();

        $this->rate_proceed_government = is_null($this->deductionSetting) ? $this->guruDeductionSetting->rate_proceed_government : $this->deductionSetting->rate_proceed_government;
        $this->rcm_product_rate = is_null($this->deductionSetting) ? $this->guruDeductionSetting->rcm_product_rate : $this->deductionSetting->rcm_product_rate;
    }

    public function render()
    {
        return view('livewire.deduction-setting-handler');
    }

    public function editRateProceedGovernment()
    {
        $this->edit_rate_proceed_government = ! $this->edit_rate_proceed_government;

        if ($this->edit_rate_proceed_government) {
            $this->deductionSetting->rate_proceed_government = $this->rate_proceed_government;
            $this->deductionSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

    public function resetRateProceedGovernment()
    {
        $this->rate_proceed_government = $this->guruDeductionSetting->rate_proceed_government;
        $this->deductionSetting->rate_proceed_government = $this->guruDeductionSetting->rate_proceed_government;
        $this->deductionSetting->save();
        $this->notification()->success(
            'Succès',
            'Réinitialisation effectuée avec succès!'
        );
    }

    public function editRcmProductRate()
    {
        $this->edit_rcm_product_rate = ! $this->edit_rcm_product_rate;

        if ($this->edit_rcm_product_rate) {
            $this->deductionSetting->rcm_product_rate = $this->rcm_product_rate;
            $this->deductionSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

    public function resetRcmProductRate()
    {
        $this->rcm_product_rate = $this->guruDeductionSetting->rcm_product_rate;
        $this->deductionSetting->rcm_product_rate = $this->guruDeductionSetting->rcm_product_rate;
        $this->deductionSetting->save();
        $this->notification()->success(
            'Succès',
            'Réinitialisation effectuée avec succès!'
        );
    }

    public function resetData()
    {
        if ($this->deductionSetting == null) {
            DeductionSetting::create([
                'rate_proceed_government' => $this->guruDeductionSetting->rate_proceed_government,
                'rcm_product_rate' => $this->guruDeductionSetting->rcm_product_rate,
                'company_id' => $this->company->id,
                'user_id' => auth()->user()->id,
            ]);
        }
    }

    public static function setup($company_id)
    {
        $guruDeductionSetting = GuruDeductionSetting::first();

        DeductionSetting::create([
            'rate_proceed_government' => $guruDeductionSetting->rate_proceed_government,
            'rcm_product_rate' => $guruDeductionSetting->rcm_product_rate,
            'company_id' => $company_id,
            'user_id' => auth()->user()->id,
        ]);
    }
}
