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
                     bceaoRate: @js($bceao_interest_rate),
                     max_rate: @js($minimum_rate),
                     rate_deductibility_limit: @js($rate_deductibility_limit) / 100,
                     rate_surplus: 0,
                     interest_rate_charged: 0,
                     amount_interest_recorded: 0,
                     amount_reintegrated: 0,
                     amount_of_interest_recorded: 0,
                     depreciation_and_amortization: 0,
                     allocations_to_provisions: 0,
                     calculation_base: 0,
                     fnCalculateAmount() {
                        return this.bceaoRate && this.interest_rate_charged && this.amount_interest_recorded ?  this.amount_interest_recorded * ((Number(this.interest_rate_charged)-(this.bceaoRate + this.max_rate)) / this.interest_rate_charged) : 0;
                     },

                    fnBaseCalcul(){
                         return  Number(this.amount_of_interest_recorded) + Number(this.depreciation_and_amortization) + Number(this.allocations_to_provisions);
                    }
                 }"
         class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12">
        <h2 class="text-2xl font-bold text-gray-7002 py-8">Frais financier</h2>


        <div class="flex gap-x-3">
            <p>1.</p>
            <p> Int??r??t sur comptes courants associ??s, y compris ceux vers??s aux ??tablissements financiers appartenant
                au groupe</p>
        </div>

        {{--        Question A--}}
        <div class="ml-6 mt-4 ">
            <div class="flex gap-x-3 ">
                <p>a)</p>
                <p> Condition de lib??ration du capital (Capital non lib??r?? enti??rement)</p>
            </div>
            <div class=" gap-x-3 ml-6 mt-4 ">
                <p> Est-ce que le capital est enti??rement lib??r?? ?</p>
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

                <div x-show="lib_condition_response == 'no'" class="mt-5">
                    <x-input type="number" label="Montant ?? r??int??grer" id="lib_condition"
                             wire:model.defer="lib_condition" name="lib_condition"
                             value="{{ old('lib_condition') }}" class="block w-full" required autofocus/>

                </div>
                <div x-show="lib_condition_response == 'yes'" class="mt-5">
                    <x-input :disabled="true" type="number" label="Montant ?? r??int??grer" id="username" name=""
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
                <p> Avez-vous des avances non rembours??es pendant plus de cinq ans ? </p>
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
                    <x-input type="number"
                             label="Montants des int??r??ts d??duits sur les fonds non rembours??s sur plus de cinq ans"
                             id="delay_condition" wire:model.defer="delay_condition" name="delay_condition"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

                </div>
                <div x-show="delay_condition_response == 'no'" class="mt-5">
                    <x-input :disabled="true" type="number"
                             label="Montants des int??r??ts d??duits sur les fonds non rembours??s sur plus de cinq ans"
                             id="delay_condition" name=""
                             value="0" class="block w-full" required autofocus/>
                </div>
            </div>
        </div>


        {{--        Questiion C--}}
        <div class="ml-6 my-6 ">
            <div class="flex gap-x-3 ">
                <p>c)</p>
                <p> Conditions sur les taux d'int??r??t </p>
            </div>
            <div class=" gap-x-3 -mr-6  mt-4 space-y-4 ">
                <div>
                    <x-input type="number" label="Montant des apports en compte" id="delay_condition"
                             wire:model.defer="amount_contribution"
                             name="amount_contribution" value="{{ old('delay_condition') }}" class="block w-full" required
                             autofocus/>

                    <small class="text-gray-500 font-semibold">Veuillez renseigner ceux non pris en compte au niveau de
                        b</small>
                </div>

{{--                Montant des int??r??ts comptabilis??s--}}
                <div>
                    <x-input type="number" label="Montant des int??r??ts comptabilis??s" id="delay_condition"
                             wire:model.defer="amount_interest_recorded" x-model="amount_interest_recorded"
                             name="amount_interest_recorded" value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

                    <small class="text-gray-500 font-semibold">Veuillez renseigner ceux non pris en compte au niveau de
                        b</small>
                </div>

{{--                Taux d'int??r??t pratiqu??--}}
                <x-input type="number" label="Taux d'int??r??t pratiqu??" id="delay_condition" name="interest_rate_charged"
                         wire:model.defer="interest_rate_charged" x-model="interest_rate_charged"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>


                <x-input :disabled="true" type="number" label="Taux d'int??r??t de la BCEAO de l'ann??e" id="delay_condition" name=""
                         wire:model.defer="bceao_interest_rate_for_the_year"
                         value="4" class="block w-full" required autofocus x-model="bceaoRate"/>


                <x-input :disabled="true" type="number" label="Taux maximum" id="delay_condition" name=""
                         x-bind:value="bceaoRate + max_rate"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

                <div>
                    <p class="text-sm text-gray-400">Surplus de taux pratiqu??</p>
                    <p class="w-full text-left h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"
                       x-text="Number(interest_rate_charged)-Number(Number(bceaoRate)+max_rate)"> </p>
                </div>

                <x-input :disabled="true" type="number" label="Montant ?? r??int??grer" id="delay_condition" name=""
                         x-bind:value="fnCalculateAmount()"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>
            </div>
        </div>


        <div class="">
            <div class="flex gap-x-3">
                <p>2.</p>
                <p> Conditions applicables ?? tous les int??r??ts</p>
            </div>
            <div class=" ml-6 mt-4 space-y-4">
{{--                Montant total des int??r??ts ?? comptabilis??s--}}
                <x-input type="number" label="Montant total des int??r??ts ?? comptabilis??s" id="delay_condition"
                         wire:model.defer="amount_of_interest_recorded" name="amount_of_interest_recorded"
                         x-model="amount_of_interest_recorded"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>


{{--                    Montant des int??r??ts non d??ductibles sur comptes courants--}}
                    <x-input :disabled="true" type="number" label="Montant des int??r??ts non d??ductibles sur comptes courants" id="delay_condition"
                             x-bind:value="fnCalculateAmount()"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

{{--                Montant des int??r??ts d??ductibles--}}
                <x-input :disabled="true" type="number" label="Montant des int??r??ts d??ductibles" id="delay_condition"
                         x-bind:value="Number(amount_of_interest_recorded) - fnCalculateAmount()"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>

                <p class="text-sm text-gray-400">R??slultat avant imp??t</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"
                   x-text="{{ $rc?->ar_value }}"></p>

                {{--R??slultat avant imp??t--}}
                <x-input :disabled="true" type="number" label="Montant des int??r??ts d??ductibles" id="delay_condition"
                         x-bind:value="{{ $rc?->ar_value }}"  class="block w-full" required autofocus/>

{{--                    Interet comptabilis??--}}
                    <x-input type="number" label="Interet comptabilis??" id="delay_condition" name=""
                             wire:model="interest_accrued" x-model="amount_of_interest_recorded"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>


{{--                Dotations aux amortissements--}}
                    <x-input type="number" label="Dotations aux amortissements" id="delay_condition" name="depreciation_and_amortization"
                             wire:model="depreciation_and_amortization" x-model="depreciation_and_amortization"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>


{{--                Dotations aux provisions--}}
                    <x-input type="number" label="Dotations aux provisions" id="delay_condition" name="allocations_to_provisions"
                             wire:model="allocations_to_provisions" x-model="allocations_to_provisions"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>


                {{--Base de calcul--}}
                <x-input :disabled="true" type="number" label="Base de calcul" id="delay_condition"
                         x-bind:value=" {{  $rc?->ar_value }} + fnBaseCalcul()"  class="block w-full" required autofocus/>


                {{--Plafond de d??ductibilit??--}}
                <x-input :disabled="true" type="number" label="Plafond de d??ductibilit??" id="delay_condition"
                         x-bind:value="  ({{  $rc?->ar_value }} + fnBaseCalcul()) * rate_deductibility_limit"  class="block w-full" required autofocus/>


                {{-- <x-input type="number"  label="Plafond de d??ductibilit??" id="delay_condition" name="" wire:model="deductibility_limit"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus /> --}}

                <p class="text-sm text-gray-400">Montant ?? r??int??grer</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"
                   x-text="((Number(amount_of_interest_recorded) - fnCalculateAmount()) - (({{  $rc?->ar_value }} + fnBaseCalcul()) * rate_deductibility_limit * rate_deductibility_limit)) > 0 ? ((Number(amount_of_interest_recorded) - fnCalculateAmount()) - (({{  $rc?->ar_value }} + fnBaseCalcul()) * rate_deductibility_limit * rate_deductibility_limit)) : 0 ">

                {{-- <x-input type="number"  label="Montant ?? r??int??grer" id="delay_condition" name="" wire:model="amount_reintegrate"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus /> --}}
            </div>
        </div>
        <div class="mt-4 flex justify-end  ">
            <x-button type="button" wire:click="store">Enregistrer</x-button>
        </div>
    </div>
</div>
