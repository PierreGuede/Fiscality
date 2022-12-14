<?php

namespace App\Http\Livewire;

use App\Fiscality\Companies\Company;
use App\Models\GuruOtherReintegrationSetting;
use App\Models\OtherReintegrationSetting;
use Livewire\Component;
use WireUi\Traits\Actions;

class OtherReintegrationSettingHandler extends Component
{
    use Actions;

    public $bceao_interest_rate;
    public $minimum_rate;
    public $rate_deductibility_limit;
    public $commission_on_purchase_deduction_limit;
    public $redevance_deduction_rate_limit;
    public $assistance_cost_deduction_rate_limit;
    public $state_donation_limit;
    public $state_donation_rate_thousandth;
    public $advertising_gifts_deduction_limit;
    public $excess_rent_applicable_deduction_limit;
    public $annual_deduction_limit;

    public $edit_bceao_interest_rate = true;
    public $edit_minimum_rate = true;
    public $edit_rate_deductibility_limit = true;
    public $edit_commission_on_purchase_deduction_limit = true;
    public $edit_redevance_deduction_rate_limit = true;
    public $edit_assistance_cost_deduction_rate_limit = true;
    public $edit_state_donation_limit = true;
    public $edit_state_donation_rate_thousandth = true;
    public $edit_advertising_gifts_deduction_limit = true;
    public $edit_excess_rent_applicable_deduction_limit = true;
    public $edit_annual_deduction_limit = true;
    public ?Company $company;
    public ?GuruOtherReintegrationSetting $guruOtherReintegrationSetting;
    public ?GuruOtherReintegrationSetting $testingGuruData;
    public ?OtherReintegrationSetting $otherReintegrationSetting;

    public function mount($company)
    {
        $this->company = $company;
        $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();
        $this->otherReintegrationSetting = OtherReintegrationSetting::whereCompanyId($this->company->id)->first();

        $this->resetData();
    }

    public function render()
    {
        return view('livewire.other-reintegration-setting-handler');
    }

    public function editBceaoInterestRate()
    {
        $this->edit_bceao_interest_rate = ! $this->edit_bceao_interest_rate;

        if ($this->edit_bceao_interest_rate) {
            $this->otherReintegrationSetting->bceao_interest_rate = $this->bceao_interest_rate;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

    public function resetBceaoInterestRate()
    {
        $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

        $this->bceao_interest_rate = $this->guruOtherReintegrationSetting->bceao_interest_rate;
        $this->otherReintegrationSetting->bceao_interest_rate = $this->guruOtherReintegrationSetting->bceao_interest_rate;
        $this->otherReintegrationSetting->save();
        $this->notification()->success(
            'Succès',
            'Réinitialisation effectuée avec succès!'
        );
    }

    public function editMinimumRate()
    {
        $this->edit_minimum_rate = ! $this->edit_minimum_rate;

        if ($this->edit_minimum_rate) {
            $this->otherReintegrationSetting->minimum_rate = $this->minimum_rate;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

    public function resetMinimumRate()
    {
        $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

        $this->minimum_rate = $this->guruOtherReintegrationSetting->minimum_rate;
        $this->otherReintegrationSetting->minimum_rate = $this->guruOtherReintegrationSetting->minimum_rate;
        $this->otherReintegrationSetting->save();
        $this->notification()->success(
            'Succès',
            'Réinitialisation effectuée avec succès!'
        );
    }

    public function editRateDeductibilityLimit()
    {
        $this->edit_rate_deductibility_limit = ! $this->edit_rate_deductibility_limit;

        if ($this->edit_rate_deductibility_limit) {
            $this->otherReintegrationSetting->rate_deductibility_limit = $this->rate_deductibility_limit;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

    public function resetRateDeductibilityLimit()
    {
        $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

        $this->rate_deductibility_limit = $this->guruOtherReintegrationSetting->rate_deductibility_limit;
        $this->otherReintegrationSetting->rate_deductibility_limit = $this->guruOtherReintegrationSetting->rate_deductibility_limit;
        $this->otherReintegrationSetting->save();
        $this->notification()->success(
            'Succès',
            'Réinitialisation effectuée avec succès!'
        );
    }

    public function editCommissionOnPurchaseDeductionLimit()
    {
        $this->edit_commission_on_purchase_deduction_limit = ! $this->edit_commission_on_purchase_deduction_limit;

        if ($this->edit_commission_on_purchase_deduction_limit) {
            $this->otherReintegrationSetting->commission_on_purchase_deduction_limit = $this->commission_on_purchase_deduction_limit;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

     public function resetCommissionOnPurchaseDeductionLimit()
     {
         $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

         $this->commission_on_purchase_deduction_limit = $this->guruOtherReintegrationSetting->commission_on_purchase_deduction_limit;
         $this->otherReintegrationSetting->commission_on_purchase_deduction_limit = $this->guruOtherReintegrationSetting->commission_on_purchase_deduction_limit;
         $this->otherReintegrationSetting->save();
         $this->notification()->success(
             'Succès',
             'Réinitialisation effectuée avec succès!'
         );
     }

    public function editRedevanceDeductionRateLimit()
    {
        $this->edit_redevance_deduction_rate_limit = ! $this->edit_redevance_deduction_rate_limit;

        if ($this->edit_redevance_deduction_rate_limit) {
            $this->otherReintegrationSetting->redevance_deduction_rate_limit = $this->redevance_deduction_rate_limit;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

     public function resetRedevanceDeductionRateLimit()
     {
         $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

         $this->redevance_deduction_rate_limit = $this->guruOtherReintegrationSetting->redevance_deduction_rate_limit;
         $this->otherReintegrationSetting->redevance_deduction_rate_limit = $this->guruOtherReintegrationSetting->redevance_deduction_rate_limit;
         $this->otherReintegrationSetting->save();
         $this->notification()->success(
             'Succès',
             'Réinitialisation effectuée avec succès!'
         );
     }

    public function editAssistanceCostReductionRateLimit()
    {
        $this->edit_assistance_cost_deduction_rate_limit = ! $this->edit_assistance_cost_deduction_rate_limit;

        if ($this->edit_assistance_cost_deduction_rate_limit) {
            $this->otherReintegrationSetting->assistance_cost_deduction_rate_limit = $this->assistance_cost_deduction_rate_limit;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

     public function resetAssistanceCostReductionRateLimit()
     {
         $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

         $this->assistance_cost_deduction_rate_limit = $this->guruOtherReintegrationSetting->assistance_cost_deduction_rate_limit;
         $this->otherReintegrationSetting->assistance_cost_deduction_rate_limit = $this->guruOtherReintegrationSetting->assistance_cost_deduction_rate_limit;
         $this->otherReintegrationSetting->save();
         $this->notification()->success(
             'Succès',
             'Réinitialisation effectuée avec succès!'
         );
     }

    public function editStateDonationLimit()
    {
        $this->edit_state_donation_limit = ! $this->edit_state_donation_limit;

        if ($this->edit_state_donation_limit) {
            $this->otherReintegrationSetting->state_donation_limit = $this->state_donation_limit;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

     public function resetStateDonationLimit()
     {
         $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

         $this->state_donation_limit = $this->guruOtherReintegrationSetting->state_donation_limit;
         $this->otherReintegrationSetting->state_donation_limit = $this->guruOtherReintegrationSetting->state_donation_limit;
         $this->otherReintegrationSetting->save();
         $this->notification()->success(
             'Succès',
             'Réinitialisation effectuée avec succès!'
         );
     }

    public function editStateDonationRateThousandth()
    {
        $this->edit_state_donation_rate_thousandth = ! $this->edit_state_donation_rate_thousandth;

        if ($this->edit_state_donation_rate_thousandth) {
            $this->otherReintegrationSetting->state_donation_rate_thousandth = $this->state_donation_rate_thousandth;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

     public function resetStateDonationRateThousandth()
     {
         $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

         $this->state_donation_rate_thousandth = $this->guruOtherReintegrationSetting->state_donation_rate_thousandth;
         $this->otherReintegrationSetting->state_donation_rate_thousandth = $this->guruOtherReintegrationSetting->state_donation_rate_thousandth;
         $this->otherReintegrationSetting->save();
         $this->notification()->success(
             'Succès',
             'Réinitialisation effectuée avec succès!'
         );
     }

    public function editAdvertisingGiftsDeductionLimit()
    {
        $this->edit_advertising_gifts_deduction_limit = ! $this->edit_advertising_gifts_deduction_limit;

        if ($this->edit_advertising_gifts_deduction_limit) {
            $this->otherReintegrationSetting->advertising_gifts_deduction_limit = $this->advertising_gifts_deduction_limit;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

     public function resetAdvertisingGiftsDeductionLimit()
     {
         $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

         $this->advertising_gifts_deduction_limit = $this->guruOtherReintegrationSetting->advertising_gifts_deduction_limit;
         $this->otherReintegrationSetting->advertising_gifts_deduction_limit = $this->guruOtherReintegrationSetting->advertising_gifts_deduction_limit;
         $this->otherReintegrationSetting->save();
         $this->notification()->success(
             'Succès',
             'Réinitialisation effectuée avec succès!'
         );
     }

    public function editExcessRentApplicableDeductionLimit()
    {
        $this->edit_excess_rent_applicable_deduction_limit = ! $this->edit_excess_rent_applicable_deduction_limit;

        if ($this->edit_excess_rent_applicable_deduction_limit) {
            $this->otherReintegrationSetting->excess_rent_applicable_deduction_limit = $this->excess_rent_applicable_deduction_limit;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

     public function resetExcessRentApplicableDeductionLimit()
     {
         $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

         $this->excess_rent_applicable_deduction_limit = $this->guruOtherReintegrationSetting->excess_rent_applicable_deduction_limit;
         $this->otherReintegrationSetting->excess_rent_applicable_deduction_limit = $this->guruOtherReintegrationSetting->excess_rent_applicable_deduction_limit;
         $this->otherReintegrationSetting->save();
         $this->notification()->success(
             'Succès',
             'Réinitialisation effectuée avec succès!'
         );
     }

    public function editAnnualDeductionLimit()
    {
        $this->edit_annual_deduction_limit = ! $this->edit_annual_deduction_limit;

        if ($this->edit_annual_deduction_limit) {
            $this->otherReintegrationSetting->annual_deduction_limit = $this->annual_deduction_limit;
            $this->otherReintegrationSetting->save();
            $this->notification()->success(
                'Succès',
                'Modification effectuée avec succès!'
            );
        }
    }

     public function resetAnnualDeductionLimit()
     {
         $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();
         $this->annual_deduction_limit = $this->guruOtherReintegrationSetting->annual_deduction_limit;
         $this->otherReintegrationSetting->annual_deduction_limit = $this->guruOtherReintegrationSetting->annual_deduction_limit;
         $this->otherReintegrationSetting->save();
         $this->notification()->success(
             'Succès',
             'Réinitialisation effectuée avec succès!'
         );
     }

    public function resetData()
    {
        $this->guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

        if ($this->otherReintegrationSetting == null) {
            OtherReintegrationSetting::create([
                'bceao_interest_rate' => $this->guruOtherReintegrationSetting->bceao_interest_rate,
                'minimum_rate' => $this->guruOtherReintegrationSetting->minimum_rate,
                'rate_deductibility_limit' => $this->guruOtherReintegrationSetting->rate_deductibility_limit,
                'commission_on_purchase_deduction_limit' => $this->guruOtherReintegrationSetting->commission_on_purchase_deduction_limit,
                'redevance_deduction_rate_limit' => $this->guruOtherReintegrationSetting->redevance_deduction_rate_limit,
                'assistance_cost_deduction_rate_limit' => $this->guruOtherReintegrationSetting->assistance_cost_deduction_rate_limit,
                'state_donation_limit' => $this->guruOtherReintegrationSetting->state_donation_limit,
                'state_donation_rate_thousandth' => $this->guruOtherReintegrationSetting->state_donation_rate_thousandth,
                'advertising_gifts_deduction_limit' => $this->guruOtherReintegrationSetting->advertising_gifts_deduction_limit,
                'excess_rent_applicable_deduction_limit' => $this->guruOtherReintegrationSetting->excess_rent_applicable_deduction_limit,
                'annual_deduction_limit' => $this->guruOtherReintegrationSetting->annual_deduction_limit,
                'company_id' => $this->company->id,
                'user_id' => auth()->user()->id,
            ]);
        }
        $this->bceao_interest_rate = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->bceao_interest_rate : $this->otherReintegrationSetting->bceao_interest_rate;
        $this->minimum_rate = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->minimum_rate : $this->otherReintegrationSetting->minimum_rate;
        $this->rate_deductibility_limit = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->rate_deductibility_limit : $this->otherReintegrationSetting->rate_deductibility_limit;
        $this->commission_on_purchase_deduction_limit = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->commission_on_purchase_deduction_limit : $this->otherReintegrationSetting->commission_on_purchase_deduction_limit;
        $this->redevance_deduction_rate_limit = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->redevance_deduction_rate_limit : $this->otherReintegrationSetting->redevance_deduction_rate_limit;
        $this->assistance_cost_deduction_rate_limit = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->assistance_cost_deduction_rate_limit : $this->otherReintegrationSetting->assistance_cost_deduction_rate_limit;
        $this->state_donation_limit = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->state_donation_limit : $this->otherReintegrationSetting->state_donation_limit;
        $this->state_donation_rate_thousandth = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->state_donation_rate_thousandth : $this->otherReintegrationSetting->state_donation_rate_thousandth;
        $this->advertising_gifts_deduction_limit = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->advertising_gifts_deduction_limit : $this->otherReintegrationSetting->advertising_gifts_deduction_limit;
        $this->excess_rent_applicable_deduction_limit = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->excess_rent_applicable_deduction_limit : $this->otherReintegrationSetting->excess_rent_applicable_deduction_limit;
        $this->annual_deduction_limit = is_null($this->otherReintegrationSetting) ? $this->guruOtherReintegrationSetting->annual_deduction_limit : $this->otherReintegrationSetting->annual_deduction_limit;
    }

    public static function setup($company_id)
    {
        $guruOtherReintegrationSetting = GuruOtherReintegrationSetting::first();

        OtherReintegrationSetting::create([
            'bceao_interest_rate' => $guruOtherReintegrationSetting->bceao_interest_rate,
            'minimum_rate' => $guruOtherReintegrationSetting->minimum_rate,
            'rate_deductibility_limit' => $guruOtherReintegrationSetting->rate_deductibility_limit,
            'commission_on_purchase_deduction_limit' => $guruOtherReintegrationSetting->commission_on_purchase_deduction_limit,
            'redevance_deduction_rate_limit' => $guruOtherReintegrationSetting->redevance_deduction_rate_limit,
            'assistance_cost_deduction_rate_limit' => $guruOtherReintegrationSetting->assistance_cost_deduction_rate_limit,
            'state_donation_limit' => $guruOtherReintegrationSetting->state_donation_limit,
            'state_donation_rate_thousandth' => $guruOtherReintegrationSetting->state_donation_rate_thousandth,
            'advertising_gifts_deduction_limit' => $guruOtherReintegrationSetting->advertising_gifts_deduction_limit,
            'excess_rent_applicable_deduction_limit' => $guruOtherReintegrationSetting->excess_rent_applicable_deduction_limit,
            'annual_deduction_limit' => $guruOtherReintegrationSetting->annual_deduction_limit,
            'company_id' => $company_id,
            'user_id' => auth()->user()->id,
        ]);
    }

    public static function getValue($company_id)
    {
       return OtherReintegrationSetting::whereCompanyId($company_id)->first();
    }
}
