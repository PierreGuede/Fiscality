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
    <div x-data="{ lib_condition_response: 'yes', delay_condition_response: 'yes' }"  class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12" >
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
                <p> Est-ce que le capital est entièrement libéré ?</p>
                <div  class="space-x-4 mt-2" >
                    <span>
                        <input x-model="lib_condition_response" type="radio" name="lib_condition_response" value='yes'  >
                        <label for="response">Oui</label>
                    </span>
                    <span>
                        <input  x-model="lib_condition_response"  type="radio" name="lib_condition_response" value="no" >
                        <label for="delay_condition_response">Non</label>
                    </span>
                </div>

                <div x-show="lib_condition_response == 'yes'" class="mt-5" >
                    <x-input type="text" label="Montant à réintégrer" id="lib_condition" name="lib_condition"
                             value="{{ old('lib_condition') }}" class="block w-full" required autofocus />
                </div>
                <div x-show="lib_condition_response == 'no'" class="mt-5" >
                    <x-input :disabled="true" type="number"  label="Montant à réintégrer" id="username" name=""
                             value="0" class="block w-full" required autofocus />
                </div>
            </div>
        </div>

{{--        Questiion B--}}
        <div class="ml-6 mt-4 " >
            <div class="flex gap-x-3 ">
                <p>b)</p> <p> Conditions de delai </p>
            </div>
            <div class=" gap-x-3 ml-6 mt-4 ">
                <p> Avez-vous des avances non remboursées pendant plus de cinq ans ? </p>
                <div  class="space-x-4 mt-2" >
                    <span>
                        <input x-model="delay_condition_response" type="radio" name="delay_condition_response" value='yes'  >
                        <label for="response">Oui</label>
                    </span>
                    <span>
                        <input  x-model="delay_condition_response"  type="radio" name="delay_condition_response" value="no" >
                        <label for="delay_condition_response">Non</label>
                    </span>
                </div>

                <div x-show="delay_condition_response == 'yes'" class="mt-5" >
                    <x-input type="text" label="Montants des intérêts déduits sur les fonds non remboursés sur plus de cinq ans" id="delay_condition" name="delay_condition"
                             value="{{ old('delay_condition') }}" class="block w-full" required autofocus />
                </div>
                <div x-show="delay_condition_response == 'no'" class="mt-5" >
                    <x-input :disabled="true" type="number"  label="Montants des intérêts déduits sur les fonds non remboursés sur plus de cinq ans" id="delay_condition" name=""
                             value="0" class="block w-full" required autofocus />
                </div>
            </div>
        </div>


        {{--        Questiion C--}}
        <div class="ml-6 mt-4 mb-4 " >
            <div class="flex gap-x-3 ">
                <p>c)</p> <p> Conditions sur les taux d'intérêt </p>
            </div>
            <div class=" gap-x-3 -mr-6  mt-4 space-y-4 ">
                <x-input type="text" label="Montant des apports en compte (veuillez renseigner ceux non pris en compte au niveau de b)" id="delay_condition" name="delay_condition"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Montant des intérêts comptabilisés (veuillez  renseigner ceux non pris en compte au niveau de b)" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Taux d'intérêt pratiqué" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Taux d'intérêt de la BCEAO de l'année" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Surplus de taux pratiqué" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Montant à réintégrer" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Intérêt sur comptes courants associés non déductible" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />
            </div>
        </div>


        <div class="">
            <div class="flex gap-x-3" >
                <p>2.</p> <p> Conditions applicables à tous les intérêts</p>
            </div>
            <div class=" ml-6 mt-4 space-y-4" >
                <x-input type="number"  label="Montant total des intérêts à comptabilisés" id="delay_condition" name=""
                     value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Montant des intérêts non déductibles sur comptes courants" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Montant des intérêts déductibles" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Réslultat avant impôt" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Dotations aux amortissements" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Dotations aux provisions" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Base de calcul" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Plafond de déductibilité" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />

                <x-input type="number"  label="Montant à réintégrer" id="delay_condition" name=""
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus />
            </div>
        </div>
    </div>
</div>
