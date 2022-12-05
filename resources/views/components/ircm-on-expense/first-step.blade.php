<div>
    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 text-sm text-slate-700 p-3   text-lg text-gray-700 font-semibold  ">Intitulé</p>
        <div class="col-span-3 p-3 text-lg text-gray-700 font-semibold   "><p>Montant</p></div>
        <div class="col-span-2  p-3  "><p></p></div>
    </div>

    <form class="space-y-4" wire:submit.prevent="nextStep">


        <div class=" grid grid-cols-12   ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2">Charges ne se rapportant pas à l'exercice (et non provisionnées)</p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         class=" "
                         wire:model.defer="expense_not_related" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.expense_not_related" value="true" />
            </div>
        </div>
        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Charges non justifiés par des factures normalisées
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="unjustfified_expense" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.unjustfified_expense" value="true" />
            </div>
        </div>
        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Rémunération n'ayant pas fait l'objet de retenues à la source
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="remuneration_not_subject_withholding_tax" value="{{ old('username') }}"
                         class="w-full " required autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.remuneration_not_subject_withholding_tax" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Frais financier
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="financial_cost" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto ">
                <x-toggle wire:model.defer="data.financial_cost" value="true" />

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Commission sur achats
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="commission_on_purchase" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.commission_on_purchase" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Commission verser au courtier d'assurance ne disposant de

            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="commission_insurance_broker" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.commission_insurance_broker" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Redevance
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="redevance" value="{{ old('username') }}" class="w-full " required autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.redevance" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Frais d'assistance technique comptable et financière
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="accountind_financial_technical_assistance_costs"
                         value="{{ old('username') }}" class="w-full " required autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.accountind_financial_technical_assistance_costs" value="true" />
            </div>
        </div>


        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Intérêts verser par un établissement stable au siège
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="interest_paid" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.interest_paid" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Dons, subventions et cotisations
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="donation_grant_contribution" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.donation_grant_contribution" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Cadeaux publicitaires
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="advertising_gift" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.advertising_gift" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Dépenses Somptuaires
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="sumptuary_expenses" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.sumptuary_expenses" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Rémunération occultes
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="occult_remuneration" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.occult_remuneration" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Taxe sur les véhicules à moteur
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="motor_vehicle_tax" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.motor_vehicle_tax" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                impôt sur les bénéfices
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="income_tax" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.income_tax" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Amendes et pénalités
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="fines_penalities" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.fines_penalities" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Immobilisations passées
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="past_assets" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.past_assets" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Autres charges non déductibles
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="other_non_deductible_expense" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.other_non_deductible_expense" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Variation de l'écart de conversation
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="variation_conversation_gap" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.variation_conversation_gap" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Surplus de loyers (véhiculede tourisme)
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="excess_rent" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto ">
                <x-toggle wire:model.defer="data.excess_rent" value="true" />
            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                Autres charges non déductibles
            </p>
            <div class="col-span-3 ">
                <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="other_non_deductible_expenses" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="   col-span-1 mx-auto my-auto">
                <x-toggle wire:model.defer="data.other_non_deductible_expenses" value="true" />
            </div>
        </div>

        <x-button type="submit" >Suivant</x-button>
    </form>
</div>
</div>
