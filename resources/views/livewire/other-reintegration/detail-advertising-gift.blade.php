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
{{--    'turnover' => $advertising_gift->turnover,--}}
{{--    'total_amount' => $advertising_gift->total_amount,--}}
{{--    'surplus_reintegrated' => $advertising_gift->surplus_reintegrated,--}}
{{--    'deduction_limit' => $advertising_gift->limit_deduction,--}}
    <div x-data="{ total_advertising_gift: [], turnover: {{ $turnover  }}, total_amount: {{ $total_amount  }}, surplus_reintegrated: {{ $surplus_reintegrated  }}, deduction_limit: {{ $deduction_limit  }}  }"
         class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12">
        <h2 class="text-2xl font-bold text-gray-7002 py-8">Cadeaux à caractère publicitaire</h2>

        <form wire:submit.prevent="save">
            <div class="  mt-4 space-y-4 ">
                <div class="grid grid-cols-12 gap-x-4">
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-7">Intitulé </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-3">Montant </h5>
                </div>

                <div class="space-y-4" >
                    @foreach($inputs as  $key => $value)
                        <div class="flex gap-x-2 items-center ">

                            <div class="grid grid-cols-12 gap-x-4">
                                <div class="col-span-7">
                                    <x-input :disabled="true" type="number" label="" id="delay_condition" name=""
                                             value="{{ old('delay_condition') }}" class="block w-full" required
                                             autofocus
                                             type="text" id="input_{{ $key }}_name" label='Nom'
                                             wire:model.defer="inputs.{{ $key }}.name"
                                             placeholder="Nom"
                                             class="" required autofocus/>
                                    @error('inputs.' . $key . '.name')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-3">
                                    <x-input :disabled="true" class="w-full" for="input_{{ $key }}_amount"
                                             type="number" id="input_{{ $key }}_amount" label='Montant'
                                              wire:model.defer="inputs.{{ $key }}.amount"
                                             placeholder="Compte" class="" required autofocus/>
                                    @error('inputs.' . $key . '.amount')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-span-1">

                            </div>
                        </div>
                    @endforeach
                </div>

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
            </div>


            <div class="mt-2 space-y-3 ">
                <x-input :disabled="true" type="number" step="any" label="Total des articles publicitaires" id="total_amount" name=""
                         value=" {{ old('total_amount', $total_amount)  }} "
                         class="block w-full" required autofocus/>
                <x-input :disabled="true" type="number" label="Chiffre d'affaires" step="any" id="turnover" name="turnover"
                        value="{{ old('turnover', $turnover)  }}"
                          class="block w-full" required autofocus/>
                <x-input :disabled="true" type="number" step="any" label="Limite de déduction" id="delay_condition" name=""
                        value="{{ old('deduction_limit', $deduction_limit)  }}"
                          class="block w-full" required autofocus/>
                <x-input :disabled="true" type="number" step="any" label="Excédent à réintégrer" id="delay_condition" name=""
                         value=" {{ old('surplus_reintegrated', $surplus_reintegrated)  }} " class="block w-full" required autofocus/>
            </div>

        </form>
    </div>
</div>
