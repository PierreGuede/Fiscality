<div
    x-show="$wire.open_a_side"
    x-cloak
    x-transition
    class="fixed bg-white/30 backdrop-blur-sm w-full  top-0 left-0  h-screen z-50  ">
    <button wire:click="closeASide"
            class="absolute outline-none group top-2 -translate-x-full  left-[calc(50%-0.2rem)] bg-white rounded-full p-2 z-50 ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6 group-hover:rotate-45 duration-300 hover:transition-all ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>

    </button>
    <div x-data="{ lib_condition_response: 'yes', delay_condition_response: 'yes',
                     bceaoRate:4,
                     rate_surplus:0,
                     interest_rate_charged: 0,
                     amount_interest_recorded: 0,
                     amount_reintegrated: 0,
                     amount_of_interest_recorded: 0,
                     depreciation_and_amortization: 0,
                     allocations_to_provisions: 0,
                     calculation_base: 0,
                     fnCalculateAmount() {
                        return this.bceaoRate && this.interest_rate_charged && this.amount_interest_recorded ?  this.amount_interest_recorded * ((Number(this.interest_rate_charged)-(this.bceaoRate+0.03)) / this.interest_rate_charged) : 0;
                     },

                    fnBaseCalcul(){
                         return  Number(this.amount_of_interest_recorded) + Number(this.depreciation_and_amortization) + Number(this.allocations_to_provisions);
                    }
                 }"
         class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12">
        <h2 class="text-2xl font-bold text-gray-7002 py-8">Frais financier</h2>


        <div class="flex gap-x-3">
            <p>1.</p>
            <p> Intérêt sur comptes courants associés, y compris ceux versés aux établissements financiers appartenant
                au groupe</p>
        </div>

        {{--        Question A--}}
        <div class="ml-6 mt-4 ">
            <div class="flex gap-x-3 ">
                <p>a)</p>
                <p> Condition de libération du capital (Capital non libéré entièrement)</p>
            </div>
            <div class=" gap-x-3 ml-6 mt-4 ">
                <p> Est-ce que le capital est entièrement libéré ?</p>
                <div class="space-x-4 mt-2">
                    <span>
                        <input x-model="lib_condition_response" type="radio" name="lib_condition_response" value='yes'>
                        <label for="response">Oui</label>
                    </span>
                    <span>
                        <input x-model="lib_condition_response" type="radio" name="lib_condition_response" value="no">
                        <label for="delay_condition_response">Non</label>
                    </span>
                </div>

                <div x-show="lib_condition_response == 'yes'" class="mt-5">
                    <x-input type="text" label="Montant à réintégrer" id="lib_condition"
                             wire:model.defer="lib_condition" name="lib_condition"
                             value="{{ old('lib_condition') }}" class="block w-full" required autofocus/>
                </div>
                <div x-show="lib_condition_response == 'no'" class="mt-5">
                    <x-input :disabled="true" type="number" label="Montant à réintégrer" id="username" name=""
                             value="0" class="block w-full" required autofocus/>
                </div>
            </div>
        </div>

        {{--        Questiion B--}}
        <div class="ml-6 mt-4 ">
            <div class="flex gap-x-3 ">
                <p>b)</p>
                <p> Conditions de delai </p>
            </div>
            <div class=" gap-x-3 ml-6 mt-4 ">
                <p> Avez-vous des avances non remboursées pendant plus de cinq ans ? </p>
                <div class="space-x-4 mt-2">
                    <span>
                        <input x-model="delay_condition_response" type="radio" name="delay_condition_response"
                               value='yes'>
                        <label for="response">Oui</label>
                    </span>
                    <span>
                        <input x-model="delay_condition_response" type="radio" name="delay_condition_response"
                               value="no">
                        <label for="delay_condition_response">Non</label>
                    </span>
                </div>

                <div x-show="delay_condition_response == 'yes'" class="mt-5">
                    <x-input type="text"
                             label="Montants des intérêts déduits sur les fonds non remboursés sur plus de cinq ans"
                             id="delay_condition" wire:model.defer="delay_condition" name="delay_condition"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>
                </div>
                <div x-show="delay_condition_response == 'no'" class="mt-5">
                    <x-input :disabled="true" type="number"
                             label="Montants des intérêts déduits sur les fonds non remboursés sur plus de cinq ans"
                             id="delay_condition" name=""
                             value="0" class="block w-full" required autofocus/>
                </div>
            </div>
        </div>


        {{--        Questiion C--}}
        <div class="ml-6 my-6 ">
            <div class="flex gap-x-3 ">
                <p>c)</p>
                <p> Conditions sur les taux d'intérêt </p>
            </div>
            <div class=" gap-x-3 -mr-6  mt-4 space-y-4 ">
                <div>
                    <x-input type="number" label="Montant des apports en compte" id="delay_condition"
                             wire:model.defer="amount_contribution"
                             name="delay_condition" value="{{ old('delay_condition') }}" class="block w-full" required
                             autofocus/>
                    <small class="text-gray-500 font-semibold">Veuillez renseigner ceux non pris en compte au niveau de
                        b</small>
                </div>

{{--                Montant des intérêts comptabilisés--}}
                <div>
                    <x-input type="number" label="Montant des intérêts comptabilisés" id="delay_condition"
                             wire:model.defer="amount_interest_recorded" x-model="amount_interest_recorded"
                             name="" value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>
                    <small class="text-gray-500 font-semibold">Veuillez renseigner ceux non pris en compte au niveau de
                        b</small>
                </div>

{{--                Taux d'intérêt pratiqué--}}
                <x-input type="number" label="Taux d'intérêt pratiqué" id="delay_condition" name=""
                         wire:model.defer="interest_rate_charged" x-model="interest_rate_charged"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

                <x-input type="number" label="Taux d'intérêt de la BCEAO de l'année" id="delay_condition" name=""
                         wire:model.defer="bceao_interest_rate_for_the_year"
                         value="4" class="block w-full" required autofocus x-model="bceaoRate"/>

                <x-input :disabled="true" type="number" label="Taux maximum" id="delay_condition" name=""
                         x-bind:value="bceaoRate + 3"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

                <div>
                    <p class="text-sm text-gray-400">Surplus de taux pratiqué</p>
                    <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"
                       x-text="Number(interest_rate_charged)-(bceaoRate+0.03)"> </p>
                </div>

                <x-input :disabled="true" type="number" label="Montant à réintégrer" id="delay_condition" name=""
                         x-bind:value="fnCalculateAmount()"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>
            </div>
        </div>


        <div class="">
            <div class="flex gap-x-3">
                <p>2.</p>
                <p> Conditions applicables à tous les intérêts</p>
            </div>
            <div class=" ml-6 mt-4 space-y-4">
{{--                Montant total des intérêts à comptabilisés--}}
                <x-input type="number" label="Montant total des intérêts à comptabilisés" id="delay_condition"
                         wire:model.defer="amount_of_interest_recorded" name="amount_of_interest_recorded"
                         x-model="amount_of_interest_recorded"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

{{--                    Montant des intérêts non déductibles sur comptes courants--}}
                    <x-input :disabled="true" type="number" label="Montant des intérêts non déductibles sur comptes courants" id="delay_condition"
                             x-bind:value="fnCalculateAmount()"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

{{--                Montant des intérêts déductibles--}}
                <x-input :disabled="true" type="number" label="Montant des intérêts déductibles" id="delay_condition"
                         x-bind:value="Number(amount_of_interest_recorded) - fnCalculateAmount()"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

                <p class="text-sm text-gray-400">Réslultat avant impôt</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"
                   x-text="{{ $rc?->ar_value }}"></p>

                {{--Réslultat avant impôt--}}
                <x-input :disabled="true" type="number" label="Montant des intérêts déductibles" id="delay_condition"
                         x-bind:value="{{ $rc?->ar_value }}"  class="block w-full" required autofocus/>

{{--                    Interet comptabilisé--}}
                    <x-input type="number" label="Interet comptabilisé" id="delay_condition" name=""
                             wire:model="interest_accrued" x-model="amount_of_interest_recorded"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

{{--                Dotations aux amortissements--}}
                    <x-input type="number" label="Dotations aux amortissements" id="delay_condition" name=""
                             wire:model="depreciation_and_amortization" x-model="depreciation_and_amortization"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

{{--                Dotations aux provisions--}}
                    <x-input type="number" label="Dotations aux provisions" id="delay_condition" name=""
                             wire:model="allocations_to_provisions" x-model="allocations_to_provisions"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

                {{--Base de calcul--}}
                <x-input :disabled="true" type="number" label="Base de calcul" id="delay_condition"
                         x-bind:value=" {{  $rc?->ar_value }} + fnBaseCalcul()"  class="block w-full" required autofocus/>


                {{--Plafond de déductibilité--}}
                <x-input :disabled="true" type="number" label="Plafond de déductibilité" id="delay_condition"
                         x-bind:value="  ({{  $rc?->ar_value }} + fnBaseCalcul()) * (30/100)"  class="block w-full" required autofocus/>


                {{-- <x-input type="number"  label="Plafond de déductibilité" id="delay_condition" name="" wire:model="deductibility_limit"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus /> --}}

                <p class="text-sm text-gray-400">Montant à réintégrer</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"
                   x-text="((Number(amount_of_interest_recorded) - fnCalculateAmount()) - (({{  $rc?->ar_value }} + fnBaseCalcul()) * (30/100) * (30/100))) > 0 ? ((Number(amount_of_interest_recorded) - fnCalculateAmount()) - (({{  $rc?->ar_value }} + fnBaseCalcul()) * (30/100) * (30/100))) : 0 ">

                {{-- <x-input type="number"  label="Montant à réintégrer" id="delay_condition" name="" wire:model="amount_reintegrate"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus /> --}}
            </div>
        </div>
        <div class="mt-4 flex justify-end  ">
            <x-button type="button" wire:click="store">Enregistrer</x-button>
        </div>
    </div>
</div>
