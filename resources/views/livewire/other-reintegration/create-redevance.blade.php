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
    <div x-data="{  array_of_amount: [], turnover: @js($turnover), rate: @js($deduction_limit_rate)/100 }"
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
                    @foreach($inputs as  $key => $value)
                        <div   class="flex gap-x-2 items-center ">
                            <div class="grid grid-cols-12 gap-x-4">
                                <div class="col-span-2">
                                    <x-input  :disabled=" count($guru_redevance) > $key  "  type="number" label="" for="input_{{ $key }}_account"
                                             id="input_{{ $key }}_account" name="inputs.{{ $key }}.account"
                                             class="block w-full" required
                                             wire:model.defer="inputs.{{ $key }}.account"
                                             autofocus/>

                                </div>

                                <div class="col-span-7">
                                    <x-input :disabled=" count($guru_redevance) > $key  " type="text" label="" for="input_{{ $key }}_designation"
                                             id="input_{{ $key }}_designation" name="inputs.{{ $key }}.designation"
                                             class="block w-full" required
                                             wire:model.defer="inputs.{{ $key }}.designation"
                                             autofocus/>

                                </div>

                                <div class="col-span-3">
                                    <x-input  x-model=" array_of_amount[{{ $key  }}]" type="number" label="" for="input_{{ $key }}_amount"
                                             id="input_{{ $key }}_amount" name="inputs.{{ $key }}.amount"
                                              class="block w-full" required
                                             wire:model.defer="inputs.{{ $key }}.amount"
                                             autofocus/>

                                </div>


                            </div>


                            <div class="col-span-1">
                            @if(count($guru_redevance) <= $key)
                                <button type="button" wire:click="remove( {{ $key  }} )"
                                        class=" hover:bg-red-100 p-1.5 rounded-md ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5"
                                         stroke="currentColor"
                                         class="w-4 h-4 stroke-2 stroke-red-500    ">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                    </svg>
                                </button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <p class="text-xl text-gray-700 font-semibold" x-text="value" ></p>

                <div>
                    <button type="button" wire:click="add"
                            class="flex items-center justify-center px-4 py-2.5 text-sm text-blue-600 cursor-pointer focus:outline-none hover:bg-blue-100 rounded-sm ">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <p class="ml-2">Ajouter</p>
                    </button>
                </div>

                <div>
                    <x-input :disabled="true" wire:model.defer="total_amount" type="number" step="0.01" label="Total des rémunations" id="remu" name="avl"
                          x-bind:value=" array_of_amount.length > 0 ? array_of_amount.reduce((acc, next) => Number(acc) + Number(next)  , 0) : 0"   class="block w-full" required autofocus/>
                </div>

                <div class="mt-2 space-y-3 ">

                    <x-input :disabled="true" x-model="turnover" wire:model.defer="turnover" type="number" step="0.01" label="Chiffre d'affaires" id="turnover" name="turnover"
                             value="{{ old('turnover') }}" class="block w-full" required autofocus/>


                    <x-input  type="number" wire:model.defer="deduction_limit" step="0.01" label="Limite de déduction" id="delay_condition" name=""
                             x-bind:value="turnover * rate" class="block w-full" step="0.01" required autofocus/>
                    <x-input :disabled="true" type="number" wire:model.defer="amount_reintegrated" step="0.01" label="Montant à réintégrer" id="reintegration_amount" name=""
                             x-bind:value="array_of_amount.length > 0 && array_of_amount.reduce((acc, next) => Number(acc) + Number(next)  , 0) - (turnover * rate) > 0 ? array_of_amount.reduce((acc, next) => Number(acc) + Number(next)  , 0) - (turnover * rate) : 0" class="block w-full" required autofocus/>
                </div>

            </div>

            <div class="flex justify-end mt-4" >
                <x-button> Enregistrer </x-button>
            </div>
        </form>
    </div>

</div>
