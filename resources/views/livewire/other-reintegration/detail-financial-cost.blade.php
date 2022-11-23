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
                     rate_surplus: 0,
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

                <div class="mt-5">
                    <x-input disabled type="text" label="Montant à réintégrer" id="lib_condition"
                             name="lib_condition"
                             value="{{ old('lib_condition',$inputsliberation_condition->amount_reintegrated) }}" class="block w-full" required autofocus/>
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
                <p> Avances non remboursées pendant plus de cinq ans </p>

                <div class="mt-5">
                    <x-input type="text"
                            disabled
                             label="Montants des intérêts déduits sur les fonds non remboursés sur plus de cinq ans"
                             id="delay_condition"  name="delay_condition"
                             value="{{ old('delay_condition',$inputsdelay_condition !=(null|| 0) ? $inputsdelay_condition->amount_reintegrated :0) }}" class="block w-full" required autofocus/>
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
                             disabled
                             name="delay_condition" value="{{ old('delay_condition',$inputsrate_condition !=(null|| 0) ? $inputsrate_condition->amount_contribution :0) }}" class="block w-full" required
                             autofocus/>
                    <small class="text-gray-500 font-semibold">Ceux non pris en compte au niveau de 2 seront renseigné</small>
                </div>

                {{--                Montant des intérêts comptabilisés--}}
                <div>
                    <x-input disabled type="number" label="Montant des intérêts comptabilisés" id="delay_condition"
                             name="" value="{{ old('delay_condition',$inputsrate_condition !=(null|| 0) ? $inputsrate_condition->amount_interest_recorded :0) }}" class="block w-full" required autofocus/>
                    <small class="text-gray-500 font-semibold">Veuillez renseigner ceux non pris en compte au niveau de
                        b</small>
                </div>

                {{--                Taux d'intérêt pratiqué--}}
                <x-input disabled type="number" label="Taux d'intérêt pratiqué" id="delay_condition" name=""
                         value="{{ old('delay_condition',$inputsrate_condition !=(null|| 0) ? $inputsrate_condition->interest_rate_charged :0) }}" class="block w-full" required autofocus/>

                <x-input disabled type="number" label="Taux d'intérêt de la BCEAO de l'année" id="delay_condition" name=""
                         value="{{ old('delay_condition',$inputsrate_condition !=(null|| 0) ? $inputsrate_condition->bceao_interest_rate_for_the_year :0) }}" class="block w-full" required autofocus x-model="bceaoRate"/>

                <x-input disabled  type="number" label="Taux maximum" id="delay_condition" name=""

                         value="{{ old('delay_condition',$inputsrate_condition !=(null|| 0) ? $inputsrate_condition->maximum_rate :0) }}" class="block w-full" required autofocus/>

                <div>
                    <x-input disabled  type="number" label="Surplus de taux pratiqué" id="delay_condition" name=""
                             value="{{ old('surplus',$inputsrate_condition !=(null|| 0) ? $inputsrate_condition->rate_surplus :0) }}" class="block w-full" required autofocus/>

                </div>

                <x-input disabled  type="number" label="Montant à réintégrer" id="delay_condition" name=""

                         value="{{ old('delay_condition',$inputsrate_condition !=(null|| 0) ? $inputsrate_condition->amount_reintegrated :0) }}" class="block w-full" required autofocus/>
            </div>
        </div>


        <div class="">
            <div class="flex gap-x-3">
                <p>2.</p>
                <p> Conditions applicables à tous les intérêts</p>
            </div>
            <div class=" ml-6 mt-4 space-y-4">
                {{--                Montant total des intérêts à comptabilisés--}}
                <x-input disabled type="number" label="Montant total des intérêts à comptabilisés" id="delay_condition"
                         name="amount_of_interest_recorded"

                         value="{{ old('delay_condition',$inputsFinancialCondition->amount_of_interest_recorded) }}" class="block w-full" required autofocus/>

                {{--                    Montant des intérêts non déductibles sur comptes courants--}}
                <x-input disabled  type="number" label="Montant des intérêts non déductibles sur comptes courants" id="delay_condition"

                         value="{{ old('delay_condition',$inputsFinancialCondition->non_deductible_interest_amount) }}" class="block w-full" required autofocus/>

                {{--                Montant des intérêts déductibles--}}
                <x-input disabled  type="number" label="Montant des intérêts déductibles" id="delay_condition"

                         value="{{ old('delay_condition',$inputsFinancialCondition->deductible_interest_amount) }}" class="block w-full" required autofocus/>

                <x-input disabled  type="number" label="Réslultat avant impôt" id="delay_condition"
                         value="{{ old('delay_condition',$inputsFinancialCondition->profit_before_tax) }}" class="block w-full" required autofocus/>



                {{--                    Interet comptabilisé--}}
                <x-input disabled type="number" label="Interet comptabilisé" id="delay_condition" name=""

                         value="{{ old('delay_condition',$inputsFinancialCondition->interest_accrued) }}" class="block w-full" required autofocus/>

                {{--                Dotations aux amortissements--}}
                <x-input disabled type="number" label="Dotations aux amortissements" id="delay_condition" name=""

                         value="{{ old('delay_condition',$inputsFinancialCondition->depreciation_and_amortization) }}" class="block w-full" required autofocus/>

                {{--                Dotations aux provisions--}}
                <x-input disabled type="number" label="Dotations aux provisions" id="delay_condition" name=""

                         value="{{ old('delay_condition',$inputsFinancialCondition->allocations_to_provisions) }}" class="block w-full" required autofocus/>

                {{--Base de calcul--}}
                <x-input disabled  type="number" label="Base de calcul" id="delay_condition"
                value="{{ old('delay_condition',$inputsFinancialCondition->calculation_base) }}" class="block w-full" required autofocus/>


                {{--Plafond de déductibilité--}}
                <x-input disabled  type="number" label="Plafond de déductibilité" id="delay_condition"
                value="{{ old('delay_condition',$inputsFinancialCondition->deductibility_limit) }}"    class="block w-full" required autofocus/>



                <x-input disabled type="number"  label="Montant à réintégrer" id="delay_condition" name=""
                         value="{{ old('delay_condition',$inputsFinancialCondition->amount_reintegrate) }}" class="block w-full" required autofocus />
            </div>
        </div>
    </div>
</div>
