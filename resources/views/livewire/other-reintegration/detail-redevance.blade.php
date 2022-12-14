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
    <div x-data="{  array_of_amount: @js($arr_sum), turnover: @js($turnover) }"
         class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12">
        <h2 class="text-2xl font-bold text-gray-7002 py-8">Redevances</h2>

        <form class="" wire:submit.prevent="save">
            <div class=" ml-6 mt-4 space-y-4">
                <div class="grid grid-cols-12 gap-x-4">
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-2">Compte </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-7">Intitulé </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-3">Montant </h5>
                </div>

                <div class="space-y-3">

                    <span class="text-xl text-gray-700 " x-text="JSON.stringify(inputs)"></span>
                    @foreach($inputs as  $key => $value)
                        <div   class="flex gap-x-2 items-center ">

                            <div class="grid grid-cols-12 gap-x-4">
                                <div class="col-span-2">
                                    <x-input  :disabled="true"  type="number" label="" for="input_{{ $key }}_account"
                                             id="input_{{ $key }}_account" name="inputs.{{ $key }}.account"
                                             class="block w-full" required
                                             wire:model.defer="inputs.{{ $key }}.account"
                                             autofocus/>
                                </div>


                                <div class="col-span-7">
                                    <x-input :disabled="true" type="text" label="" for="input_{{ $key }}_designation"
                                             id="input_{{ $key }}_designation" name="inputs.{{ $key }}.designation"
                                             class="block w-full" required
                                             wire:model.defer="inputs.{{ $key }}.designation"
                                             autofocus/>
                                </div>

                                <div class="col-span-3">
                                    <x-input :disabled="true"  x-model=" array_of_amount[{{ $key  }}]" type="number" label="" for="input_{{ $key }}_amount"
                                             id="input_{{ $key }}_amount" name="inputs.{{ $key }}.amount"
                                              class="block w-full" required
                                             wire:model.defer="inputs.{{ $key }}.amount"
                                             autofocus/>
                                </div>


                            </div>


                            <div class="col-span-1">

                            </div>
                        </div>
                    @endforeach
                </div>
                <p class="text-xl text-gray-700 font-semibold" x-text="value" ></p>



                <div>
                    <x-input :disabled="true" wire:model.defer="total_amount" type="number" step="0.01" label="Total des rémunations" id="remu" name="avl"
                          x-bind:value=" array_of_amount.length > 0 ? array_of_amount.reduce((acc, next) => Number(acc) + Number(next)  , 0) : 0"   class="block w-full" required autofocus/>
                </div>

                <div class="mt-2 space-y-3 mb-5 ">
                    <x-input :disabled="true" x-model="turnover" wire:model.defer="turnover" type="number" step="0.01" label="Chiffre d'affaires" id="turnover" name="turnover"
                             value="{{ old('turnover') }}" class="block w-full" required autofocus/>
                    <x-input :disabled="true"  type="number" wire:model.defer="deduction_limit" step="0.01" label="Limite de déduction" id="delay_condition" name=""
                             x-bind:value="turnover * 0.05" class="block w-full" step="0.01" required autofocus/>
                    <x-input :disabled="true" type="number" wire:model.defer="amount_reintegrated" step="0.01" label="Montant à réintégrer" id="reintegration_amount" name=""
                             x-bind:value="array_of_amount.length > 0 ? array_of_amount.reduce((acc, next) => Number(acc) + Number(next)  , 0) - (turnover * 0.05) : 0" class="block w-full" required autofocus/>
                </div>

            </div>


        </form>
    </div>

</div>
