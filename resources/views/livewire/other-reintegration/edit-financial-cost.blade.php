<div
    x-show="$wire.open_a_side"
    x-cloak
    x-transition
    class="fixed bg-white/30 backdrop-blur-sm w-full  top-0 left-0  h-screen z-50  " >
        <button wire:click="closeASide" class="absolute outline-none group top-2 -translate-x-full  left-[calc(50%-0.2rem)] bg-white rounded-full p-2 z-50 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:rotate-45 duration-300 hover:transition-all ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

        </button>
    <div x-data="{ lib_condition_response: 'yes', delay_condition_response: 'yes',
                    bceaoRate: @js($bceao_interest_rate),
                     max_rate: @js($minimum_rate),
                     rate_deductibility_limit: @js($rate_deductibility_limit) / 100,
                     rate_surplus:0,
                     amount_contribution:Number({{ $financialCost?->financialCostInterest[2]->amount_contribution }}),
                     interest_rate_charged:Number({{ $financialCost?->financialCostInterest[2]->interest_rate_charged }}),
                     amount_interest_recorded:{{ $financialCost?->financialCostInterest[2]->amount_interest_recorded }},
                     amount_reintegrated:'0',
                     amount_of_interest_recorded:{{ $financialCost?->financialCostCondition->amount_of_interest_recorded }},
                     depreciation_and_amortization:{{ $financialCost?->financialCostCondition->depreciation_and_amortization }},
                     allocations_to_provisions:{{ $financialCost?->financialCostCondition->allocations_to_provisions }},
                     calculation_base:'' }"  class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12" >
        <h2 class="text-2xl font-bold text-gray-7002 py-8">Frais financier</h2>


        <div class="flex gap-x-3">
            <p>1.</p> <p> Intérêt sur comptes courants associés, y compris ceux versés aux établissements financiers appartenant au groupe</p>
        </div>

{{--        Question A--}}
        <div class="ml-6 mt-4 " >
            <div class="flex gap-x-3 ">
                <p>a)</p> <p> Condition de libération du capital (Capital non libéré entièrement)</p>
            </div>
            <div class=" gap-x-3 ml-6 mt-4 ">
                <div class="mt-5" >
                    <x-input type="text" label="Montant à réintégrer" id="lib_condition"  wire:model.defer="inputs.amount_reintegrated" name="lib_condition"
                             value="{{ old('lib_condition') }}" class="block w-full" required autofocus />
                </div>

            </div>
        </div>

{{--        Questiion B--}}
        <div class="ml-6 mt-4 " >
            <div class="flex gap-x-3 ">
                <p>b)</p> <p> Conditions de delai </p>
            </div>
            <div class=" gap-x-3 ml-6 mt-4 ">

                <div class="mt-5" >
                    <x-input type="text" label="Montants des intérêts déduits sur les fonds non remboursés sur plus de cinq ans" id="delay_condition" wire:model.defer="inputs_one.amount_reintegrated" name="delay_condition"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus />
                </div>

            </div>
        </div>


        {{--        Questiion C--}}
        <div class="ml-6 my-6 " >
            <div class="flex gap-x-3 ">
                <p>c)</p> <p> Conditions sur les taux d'intérêt </p>
            </div>
            <div class=" gap-x-3 -mr-6  mt-4 space-y-4 ">
                <div>
                <x-input type="text" label="Montant des apports en compte" id="delay_condition" wire:model.defer="inputs_two.amount_contribution"
                        name="delay_condition" value="{{ old('delay_condition') }}" class="block w-full" required autofocus  x-model="amount_contribution"/>
                    <small class="text-gray-500 font-semibold" >Veuillez renseigner ceux non pris en compte au niveau de b</small>
                </div>

                <div>
                <x-input type="number"  label="Montant des intérêts comptabilisés" id="delay_condition" wire:model.defer="inputs_two.amount_interest_recorded" x-model="amount_interest_recorded"
                        name="" value="{{ old('delay_condition') }}" class="block w-full" required autofocus />
                    <small class="text-gray-500 font-semibold" >Veuillez renseigner ceux non pris en compte au niveau de b</small>
                </div>

                <x-input type="number"  label="Taux d'intérêt pratiqué" id="delay_condition" name="" wire:model.defer="inputs_two.interest_rate_charged" x-model="interest_rate_charged"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />
                <x-input type="number"  label="Taux d'intérêt de la BCEAO de l'année" id="delay_condition" name="" wire:model.defer="inputs_two.bceao_interest_rate_for_the_year"
                         value="4" class="block w-full" required autofocus x-model="bceaoRate"/>

                        <p class="text-sm text-gray-400">Taux maximum</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="bceaoRate*0.03">

                <p class="text-sm text-gray-400">Surplus de taux pratiqué</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="Number(interest_rate_charged)-(bceaoRate*0.03)">


                <p class="text-sm text-gray-400">Montant à réintégrer</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="amount_reintegrated=((Number(amount_interest_recorded) * (Number(interest_rate_charged)-(bceaoRate*0.03))) / Number(interest_rate_charged)) > 0 ? (Number(amount_interest_recorded) * (Number(interest_rate_charged)-(bceaoRate*0.03))) / Number(interest_rate_charged) : 0">
                {{-- <x-input type="number"  label="Intérêt sur comptes courants associés non déductible" id="delay_condition" name="" wire:model.defer="inputs.non_deductible_interest"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus /> --}}
            </div>
        </div>


        <div class="">
            <div class="flex gap-x-3" >
                <p>2.</p> <p> Conditions applicables à tous les intérêts</p>
            </div>
            <div class=" ml-6 mt-4 space-y-4" >
                <x-input type="number"  label="Montant total des intérêts à comptabilisés" id="delay_condition" wire:model="inputs_three.amount_of_interest_recorded" name="amount_of_interest_recorded" x-model="amount_of_interest_recorded"
                     value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <p class="text-sm text-gray-400">Montant des intérêts non déductibles sur comptes courants</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="amount_reintegrated">

                <p class="text-sm text-gray-400">Montant des intérêts déductibles</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="Number(amount_of_interest_recorded)-amount_reintegrated">

                <p class="text-sm text-gray-400">Réslultat avant impôt</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="{{ $rc?->ar_value }}">

                {{-- <x-input type="number"  label="Réslultat avant impôt" id="delay_condition" name="" wire:model="inputs_three.profit_before_tax"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus /> --}}

                <x-input type="number"  label="Interet comptabilisé" id="delay_condition" name="" wire:model="inputs_three.interest_accrued" x-model="amount_of_interest_recorded"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Dotations aux amortissements" id="delay_condition" name="" wire:model="inputs_three.depreciation_and_amortization" x-model="depreciation_and_amortization"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Dotations aux provisions" id="delay_condition" name="" wire:model="inputs_three.allocations_to_provisions" x-model="allocations_to_provisions"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <p class="text-sm text-gray-400">Base de calcul</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="calculation_base={{ $rc?->ar_value }} + amount_of_interest_recorded + depreciation_and_amortization +allocations_to_provisions  ">

                <p class="text-sm text-gray-400">Plafond de déductibilité</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="calculation_base*0.3">


                {{-- <x-input type="number"  label="Plafond de déductibilité" id="delay_condition" name="" wire:model="inputs_three.deductibility_limit"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus /> --}}

                <p class="text-sm text-gray-400">Montant à réintégrer</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="((Number(amount_of_interest_recorded)-amount_reintegrated)-(calculation_base*0.3)) > 0 ? (Number(amount_of_interest_recorded)-amount_reintegrated)-(calculation_base*0.3) : 0">

                {{-- <x-input type="number"  label="Montant à réintégrer" id="delay_condition" name="" wire:model="inputs_three.amount_reintegrate"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus /> --}}
            </div>
        </div>
        <div class="mt-4 flex justify-end  " >
            <x-button type="button" wire:click="store" >Enregistrer</x-button>
        </div>
    </div>
</div>
