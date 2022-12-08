<div class="py-4">
    <p class="text-xl text-slate-700 font-semibold py-4">Autres réintégration</p>
    <div class="ml-4">
        <div class="ml-4 py-2">
            <p class="text-md text-slate-700 font-semibold"> Frais financiers</p>
            <div class="ml-4">
                <div class="flex items-center my-3 " >
                    <x-input :disabled="$edit_bceao_interest_rate" type="number" wire:model="bceao_interest_rate" name="bceao_interest_rate" value="25" label="Taux d'intérêt de la BCEAO de l'année ( 4%)" />
                    <div class="space-x-3 px-2" >
                        @if($edit_bceao_interest_rate)
                            <x-form.button wire:click="editBceaoInterestRate"  flat orange label="Modifier" />
                        @else
                            <x-form.button wire:click="editBceaoInterestRate" flat orange label="Enregister" />
                        @endif
                        <x-form.button wire:click="resetBceaoInterestRate" flat stone label="Réinitialiser"  />
                    </div>
                </div>
                <div class="flex items-center my-3 " >
                    <x-input :disabled="$edit_minimum_rate" type="number" wire:model="minimum_rate" name="minimum_rate" value="25" label="Taux maximum ( 3%)" />
                    <div class="space-x-3 px-2" >
                        @if($edit_minimum_rate)
                            <x-form.button wire:click="editMinimumRate"  flat orange label="Modifier" />
                        @else
                            <x-form.button wire:click="editMinimumRate" flat orange label="Enregister" />
                        @endif
                        <x-form.button wire:click="resetMinimumRate" flat stone label="Réinitialiser"  />
                    </div>
                </div>
                <div class="flex items-center my-3 " >
                    <x-input :disabled="$edit_rate_deductibility_limit" type="number" wire:model="rate_deductibility_limit" name="rate_deductibility_limit" value="25" label="Taux du pafond de déductibilité ( 30%)" />
                    <div class="space-x-3 px-2" >
                        @if($edit_rate_deductibility_limit)
                            <x-form.button wire:click="editRateDeductibilityLimit"  flat orange label="Modifier" />
                        @else
                            <x-form.button wire:click="editRateDeductibilityLimit" flat orange label="Enregister" />
                        @endif
                        <x-form.button wire:click="resetRateDeductibilityLimit" flat stone label="Réinitialiser"  />
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-4 py-2">
            <p class="text-md text-slate-700 font-semibold"> Commission sur achat</p>
            <div class="flex items-center my-3 " >
                <x-input :disabled="$edit_commission_on_purchase_deduction_limit" type="number" wire:model="commission_on_purchase_deduction_limit" name="commission_on_purchase_deduction_limit" value="25" label="Taux de limite de deduction ( 5%)" />
                <div class="space-x-3 px-2" >
                    @if($edit_commission_on_purchase_deduction_limit)
                        <x-form.button wire:click="editCommissionOnPurchaseDeductionLimit"  flat orange label="Modifier" />
                    @else
                        <x-form.button wire:click="editCommissionOnPurchaseDeductionLimit" flat orange label="Enregister" />
                    @endif
                    <x-form.button wire:click="resetCommissionOnPurchaseDeductionLimit" flat stone label="Réinitialiser"  />
                </div>
            </div>
        </div>
        <div class="ml-4 py-2">
            <p class="text-md text-slate-700 font-semibold">Redevances</p>
            <div class="flex items-center my-3 " >
                <x-input :disabled="$edit_redevance_deduction_rate_limit" type="number" wire:model="redevance_deduction_rate_limit" name="redevacne_deduction_rate_limit" value="25" label="Taux de limite de deduction ( 5%)" />
                <div class="space-x-3 px-2" >
                    @if($edit_redevance_deduction_rate_limit)
                        <x-form.button wire:click="editRedevanceDeductionRateLimit"  flat orange label="Modifier" />
                    @else
                        <x-form.button wire:click="editRedevanceDeductionRateLimit" flat orange label="Enregister" />
                    @endif
                    <x-form.button wire:click="resetRedevanceDeductionRateLimit" flat stone label="Réinitialiser"  />
                </div>
            </div>
        </div>
        <div class="ml-4 py-2">
            <p class="text-md text-slate-700 font-semibold">Frais d'assistance technique comptable et financière</p>
            <div class="ml-4">
                <div class="flex items-center my-3 " >
                    <x-input :disabled="$edit_assistance_cost_deduction_rate_limit" type="number" wire:model="assistance_cost_deduction_rate_limit" name="assistance_cost_deduction_rate_limit" value="25" label="Taux de limite de deduction ( 5%)" />
                    <div class="space-x-3 px-2" >
                        @if($edit_assistance_cost_deduction_rate_limit)
                            <x-form.button wire:click="editAssistanceCostReductionRateLimit"  flat orange label="Modifier" />
                        @else
                            <x-form.button wire:click="editAssistanceCostReductionRateLimit" flat orange label="Enregister" />
                        @endif
                        <x-form.button wire:click="resetAssistanceCostReductionRateLimit" flat stone label="Réinitialiser"  />
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-4 py-2">
            <p class="text-md text-slate-700 font-semibold">Dons à l'état</p>
            <div class="ml-4">
                <div class="flex items-center my-3 " >
                    <x-input :disabled="$edit_state_donation_limit" type="number" wire:model="state_donation_limit" name="state_donation_limit" value="25" label="Limite ( 25 000 000 XOF)" />
                    <div class="space-x-3 px-2" >
                        @if($edit_state_donation_limit)
                            <x-form.button wire:click="editStateDonationLimit"  flat orange label="Modifier" />
                        @else
                            <x-form.button wire:click="editStateDonationLimit" flat orange label="Enregister" />
                        @endif
                        <x-form.button wire:click="resetStateDonationLimit" flat stone label="Réinitialiser"  />
                    </div>
                </div>
                <div class="flex items-center my-3 " >
                    <x-input :disabled="$edit_state_donation_rate_thousandth" type="number" wire:model="state_donation_rate_thousandth" name="state_donation_rate_thousandth" value="25" label="Taux du millième du chiffre d'affaire ( 0.1%)" />
                    <div class="space-x-3 px-2" >
                        @if($edit_state_donation_rate_thousandth)
                            <x-form.button wire:click="editStateDonationRateThousandth"  flat orange label="Modifier" />
                        @else
                            <x-form.button wire:click="editStateDonationRateThousandth" flat orange label="Enregister" />
                        @endif
                        <x-form.button wire:click="resetStateDonationRateThousandth" flat stone label="Réinitialiser"  />
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-4 py-2">
            <p class="text-md text-slate-700 font-semibold">Cadeaux à caractère publicitaire</p>
            <div class="ml-4">
                <div class="flex items-center my-3 " >
                    <x-input :disabled="$edit_advertising_gifts_deduction_limit" type="number" wire:model="advertising_gifts_deduction_limit" name="advertising_gifts_deduction_limit" value="25" label="Taux de limite de deduction ( 0.3%)" />
                    <div class="space-x-3 px-2" >
                        @if($edit_advertising_gifts_deduction_limit)
                            <x-form.button wire:click="editAdvertisingGiftsDeductionLimit"  flat orange label="Modifier" />
                        @else
                            <x-form.button wire:click="editAdvertisingGiftsDeductionLimit" flat orange label="Enregister" />
                        @endif
                        <x-form.button wire:click="resetAdvertisingGiftsDeductionLimit" flat stone label="Réinitialiser"  />
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-4 py-2">
            <p class="text-md text-slate-700 font-semibold">Surplus de loyer véhicule (par jours)</p>
            <div class="ml-4">
                <div class="flex items-center my-3 " >
                    <x-input :disabled="$edit_excess_rent_applicable_deduction_limit" type="number" wire:model="excess_rent_applicable_deduction_limit" name="excess_rent_applicable_deduction_limit" value="25" label="Limite de deduction applicable( 365jours)" />
                    <div class="space-x-3 px-2" >
                        @if($edit_excess_rent_applicable_deduction_limit)
                            <x-form.button wire:click="editExcessRentApplicableDeductionLimit"  flat orange label="Modifier" />
                        @else
                            <x-form.button wire:click="editExcessRentApplicableDeductionLimit" flat orange label="Enregister" />
                        @endif
                        <x-form.button wire:click="resetExcessRentApplicableDeductionLimit" flat stone label="Réinitialiser"  />
                    </div>
                </div>
                <div class="flex items-center my-3 " >
                    <x-input :disabled="$edit_annual_deduction_limit" type="number" wire:model="annual_deduction_limit" name="annual_deduction_limit" value="25" label=" Limite de deduction annuelle( 6 250 000 XOF)" />
                    <div class="space-x-3 px-2" >
                        @if($edit_annual_deduction_limit)
                            <x-form.button wire:click="editAnnualDeductionLimit"  flat orange label="Modifier" />
                        @else
                            <x-form.button wire:click="editAnnualDeductionLimit" flat orange label="Enregister" />
                        @endif
                        <x-form.button wire:click="resetAnnualDeductionLimit" flat stone label="Réinitialiser"  />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
