@props(['data'])

<div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 text-sm text-slate-700 p-3   text-lg text-gray-700 font-semibold  ">Intitulé</p>
        <div class="col-span-3 p-3 text-lg text-gray-700 font-semibold   "><p>Montant</p></div>
        <div class="col-span-2  p-3  "><p></p></div>
    </div>

    <form class="space-y-4" >


        @if(isset($data['expense_not_related']))
            <div class=" grid grid-cols-12   ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2">Charges ne se rapportant pas à l'exercice (et non provisionnées)</p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                             wire:model.defer="data.expense_not_related" value="{{ old('username') }}" class="w-full " required
                             autofocus/>
                </div>
                <div class="   col-span-1 mx-auto my-auto">
                </div>
            </div>

        @endif
        @if(isset($data['unjustfified_expense']))
            <div class=" grid grid-cols-12  ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                    Charges non justifiés par des factures normalisées
                </p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                             wire:model.defer="data.unjustfified_expense" value="{{ old('username') }}" class="w-full " required
                             autofocus/>
                </div>
                <div class="   col-span-1 mx-auto my-auto">
                </div>
            </div>
        @endif
        @if(isset($data['remuneration_not_subject_withholding_tax']))
            <div class=" grid grid-cols-12  ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                    Rémunération n'ayant pas fait l'objet de retenues à la source
                </p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                             wire:model.defer="data.remuneration_not_subject_withholding_tax" value="{{ old('username') }}"
                             class="w-full " required autofocus/>
                </div>
                <div class="   col-span-1 mx-auto my-auto">
                </div>
            </div>
        @endif

        @if(isset($data['financial_cost']))
            <div class=" grid grid-cols-12  ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                    Frais financier
                </p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username"
                             name="username"
                             wire:model.defer="data.financial_cost" value="{{ old('username') }}" class="w-full " required
                             autofocus/>
                </div>
                <div class="col-span-1 mx-auto my-auto ">

                </div>

            </div>
        @endif

        @if(isset($data['commission_on_purchase']))
            <div class=" grid grid-cols-12  ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                    Commission sur achats
                </p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username"
                             name="username"
                             wire:model.defer="data.commission_on_purchase" value="{{ old('username') }}" class="w-full "
                             required autofocus/>
                </div>
                <div class="col-span-1 mx-auto my-auto">
                </div>
            </div>
        @endif


        @if(isset($data['commission_insurance_broker']))
            <div class=" grid grid-cols-12  ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                    Commission verser au courtier d'assurance ne disposant de

                </p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                             wire:model.defer="data.commission_insurance_broker" value="{{ old('username') }}" class="w-full "
                             required autofocus/>
                </div>
                <div class="   col-span-1 mx-auto my-auto">
                </div>
            </div>
        @endif


        @if(isset($data['redevance']))
            <div class=" grid grid-cols-12  ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                    Redevance
                </p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username"
                             name="username"
                             wire:model.defer="data.redevance" value="{{ old('username') }}" class="w-full " required autofocus/>
                </div>
                <div class="col-span-1 mx-auto my-auto">
                </div>
            </div>
        @endif

        @if(isset($data['accountind_financial_technical_assistance_costs']))
            <div class=" grid grid-cols-12  ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                    Frais d'assistance technique comptable et financière
                </p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username"
                             name="username"
                             wire:model.defer="data.accountind_financial_technical_assistance_costs"
                             value="{{ old('username') }}" class="w-full " required autofocus/>
                </div>
                <div class="col-span-1 mx-auto my-auto">
                </div>
            </div>
        @endif


        @if(isset($data['interest_paid']))
            <div class=" grid grid-cols-12  ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                    Intérêts verser par un établissement stable au siège
                </p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                             wire:model.defer="data.interest_paid" value="{{ old('username') }}" class="w-full " required
                             autofocus/>
                </div>
                <div class="   col-span-1 mx-auto my-auto">
                </div>
            </div>
        @endif

        @if(isset($data['donation_grant_contribution']))
            <div class=" grid grid-cols-12  ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                    Dons, subventions et cotisations
                </p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username"
                             name="username"
                             wire:model.defer="data.donation_grant_contribution" value="{{ old('username') }}" class="w-full "
                             required autofocus/>
                </div>
                <div class="col-span-1 mx-auto my-auto">
                </div>
            </div>
        @endif


        @if(isset($data['advertising_gift']))
            <div class=" grid grid-cols-12  ">
                <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                    Cadeaux publicitaires
                </p>
                <div class="col-span-3 ">
                    <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username"
                             name="username"
                             wire:model.defer="data.advertising_gift" value="{{ old('username') }}" class="w-full " required
                             autofocus/>
                </div>
                <div class="col-span-1 mx-auto my-auto">
                </div>
                @endif</div>


            @if(isset($data['sumptuary_expenses']))
                <div class=" grid grid-cols-12  ">
                    <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                        Dépenses Somptuaires
                    </p>
                    <div class="col-span-3 ">
                        <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                                 wire:model.defer="data.sumptuary_expenses" value="{{ old('username') }}" class="w-full " required
                                 autofocus/>
                    </div>
                    <div class="   col-span-1 mx-auto my-auto">
                    </div>
                </div>
            @endif

            @if(isset($data['occult_remuneration']))
                <div class=" grid grid-cols-12  ">
                    <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                        Rémunération occultes
                    </p>
                    <div class="col-span-3 ">
                        <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                                 wire:model.defer="data.occult_remuneration" value="{{ old('username') }}" class="w-full " required
                                 autofocus/>
                    </div>
                    <div class="   col-span-1 mx-auto my-auto">
                    </div>
                </div>
            @endif

            @if(isset($data['motor_vehicle_tax']))
                <div class=" grid grid-cols-12  ">
                    <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                        Taxe sur les véhicules à moteur
                    </p>
                    <div class="col-span-3 ">
                        <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                                 wire:model.defer="data.motor_vehicle_tax" value="{{ old('username') }}" class="w-full " required
                                 autofocus/>
                    </div>
                    <div class="   col-span-1 mx-auto my-auto">
                    </div>
                </div>
            @endif

            @if(isset($data['income_tax']))
                <div class=" grid grid-cols-12  ">
                    <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                        impôt sur les bénéfices
                    </p>
                    <div class="col-span-3 ">
                        <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                                 wire:model.defer="data.income_tax" value="{{ old('username') }}" class="w-full " required
                                 autofocus/>
                    </div>
                    <div class="   col-span-1 mx-auto my-auto">
                    </div>
                </div>
            @endif

            @if(isset($data['fines_penalities']))
                <div class=" grid grid-cols-12  ">
                    <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                        Amendes et pénalités
                    </p>
                    <div class="col-span-3 ">
                        <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                                 wire:model.defer="data.fines_penalities" value="{{ old('username') }}" class="w-full " required
                                 autofocus/>
                    </div>
                    <div class="   col-span-1 mx-auto my-auto">
                    </div>
                </div>
            @endif

            @if(isset($data['past_assets']))
                <div class=" grid grid-cols-12  ">
                    <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                        Immobilisations passées
                    </p>
                    <div class="col-span-3 ">
                        <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                                 wire:model.defer="data.past_assets" value="{{ old('username') }}" class="w-full " required
                                 autofocus/>
                    </div>
                    <div class="   col-span-1 mx-auto my-auto">
                    </div>
                </div>
            @endif

            @if(isset($data['other_non_deductible_expense']))
                <div class=" grid grid-cols-12  ">
                    <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                        Autres charges non déductibles
                    </p>
                    <div class="col-span-3 ">
                        <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                                 wire:model.defer="data.other_non_deductible_expense" value="{{ old('username') }}" class="w-full "
                                 required autofocus/>
                    </div>
                    <div class="   col-span-1 mx-auto my-auto">
                    </div>
                </div>
            @endif

            @if(isset($data['variation_conversation_gap']))
                <div class=" grid grid-cols-12  ">
                    <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                        Variation de l'écart de conversation
                    </p>
                    <div class="col-span-3 ">
                        <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                                 wire:model.defer="data.variation_conversation_gap" value="{{ old('username') }}" class="w-full "
                                 required autofocus/>
                    </div>
                    <div class="   col-span-1 mx-auto my-auto">
                    </div>
                </div>
            @endif

            @if(isset($data['excess_rent']))
                <div class=" grid grid-cols-12  ">
                    <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                        Surplus de loyers (véhiculede tourisme)
                    </p>
                    <div class="col-span-3 ">
                        <x-input :disabled="true" step="any" :disabled="true" type="number" label="" id="username"
                                 name="username"
                                 wire:model.defer="data.excess_rent" value="{{ old('username') }}" class="w-full " required
                                 autofocus/>
                    </div>
                    <div class="col-span-1 mx-auto my-auto ">
                    </div>
                </div>
            @endif


            @if(isset($data['other_non_deductible_expenses']))
                <div class=" grid grid-cols-12  ">
                    <p class="col-span-7 text-sm text-slate-700 my-auto px-2 ">
                        Autres charges non déductibles
                    </p>
                    <div class="col-span-3 ">
                        <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                                 wire:model.defer="data.other_non_deductible_expenses" value="{{ old('username') }}" class="w-full "
                                 required autofocus/>
                    </div>
                    <div class="   col-span-1 mx-auto my-auto">
                        {{--                <x-toggle wire:model.defer="ddata.ata.other_non_deductible_expenses" value="true" />--}}
                    </div>
                </div>
            @endif
            <div class=" w-10/12 mt-10 flex justify-between items-center" >
{{--                <x-button variant="neutral" type="button"  >Revenir en arrière</x-button>--}}
                <x-button type="button" wire:click="save" wire:click="edit"  >Modifier</x-button>
            </div>
    </form>
</div>
</div>
