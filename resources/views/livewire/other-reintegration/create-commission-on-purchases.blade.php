<div
    x-data="globalData"
    x-show="$wire.open_a_side"
    x-cloak
    x-transition
    class="fixed bg-white/30 backdrop-blur-sm w-full  top-0 left-0  h-screen z-50  ">
    <button wire:click="closeASide"
            class="absolute outline-none group top-2 -translate-x-full  left-[calc((100%/12)-0.2rem)] bg-white rounded-full p-2 z-50 ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6 group-hover:rotate-45 duration-300 hover:transition-all ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>
    <div x-data="{ arrayLimit:[], arrayCommission:[], rate: @js($rate) / 100 }"
         class="relative overflow-y-auto w-11/12 bg-white h-full ml-auto  px-12">
        <h2 class="text-2xl font-bold text-gray-7002 py-8">Commission sur achats (facturés par des résidents et des
            étrangers)</h2>

        <div class="">
            <div class="flex gap-x-3">
{{--                <p>2.</p>--}}
                <p>Conditions applicables à tous les intérêts</p>
            </div>
            <div class=" ml-6 mt-4 space-y-4">
                <div class="" >
                    <div class="  grid grid-cols-12 gap-x-3">
                        <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-1 text-left  ">Compte </h5>
                        <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-3 text-left  ">Intitulé </h5>
                        <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-2 text-left  ">Total des achats </h5>
                        <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-2 text-left  ">Montant des commissions</h5>
                        <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-2 text-left  ">Limite de déduction</h5>
                        <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-2 text-left  ">Montant non déductible</h5>

                    </div>
{{--                    <div class="w-4" ></div>--}}
                </div>
                <div   class="space-y-3" >
                @foreach($inputs as  $key => $value)
                    <div class="flex gap-x-2 items-center ">
                        <div class="grid grid-cols-12 gap-x-2">
                            <div class="col-span-1">
                                <x-input class="w-full" for="input_{{ $key }}_Account"
                                type="number" id="input_{{ $key }}_Account"
                                wire:model.defer="inputs.{{ $key }}.Account"
                                placeholder="Montant" class="" required autofocus />
{{--                                @error('inputs.' . $key . '.Account')--}}
{{--                                <span class="text-xs text-red-600">{{ $message }}</span>--}}
{{--                                @enderror--}}
                            </div>


                            <div class="col-span-3">
                                <x-input class="w-full" for="input_{{ $key }}_designation"
                                type="text" id="input_{{ $key }}_designation"
                                wire:model.defer="inputs.{{ $key }}.designation"
                                placeholder="Intitulé" class="" required autofocus />
{{--                                @error('inputs.' . $key . '.designation')--}}
{{--                                <span class="text-xs text-red-600">{{ $message }}</span>--}}
{{--                                @enderror--}}
                            </div>

                            <div class="col-span-2">
                                <x-input class="w-full" for="input_{{ $key }}_total"
                                type="number" id="input_{{ $key }}_total"
                                wire:model.defer="inputs.{{ $key }}.total"
                                placeholder="Total des achats" class="" x-model="arrayLimit[{{$key}}]" required autofocus />
{{--                                @error('inputs.' . $key . '.total')--}}
{{--                                    <span class="text-xs text-red-600">{{ $message }}</span>--}}
{{--                                @enderror--}}
                            </div>

                            <div class="col-span-2">
                                <x-input class="w-full" for="input_{{ $key }}_amount_commission"
                                type="number" id="input_{{ $key }}_amount_commission"
                                wire:model.defer="inputs.{{ $key }}.amount_commission" x-model="arrayCommission[{{$key}}]"
                                placeholder="Montant des commissions" class=""  required autofocus />


{{--                                @error('inputs.' . $key . '.amount_commission')--}}
{{--                                <span class="text-xs text-red-600">{{ $message }}</span>--}}
{{--                                @enderror--}}
                            </div>

                            <div class="col-span-2">
                                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"
                                   x-text=" !isNaN(arrayLimit[{{$key}}]) ? arrayLimit[{{$key}}]* rate : 0">
{{--                                @error('inputs.' . $key . '.limit')--}}
{{--                                <span class="text-xs text-red-600">{{ $message }}</span>--}}
{{--                                @enderror--}}
                            </div>

                            <div class="col-span-2">
                                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"
                                   x-text=" !isNaN(arrayCommission[{{$key}}])  && !isNaN(arrayLimit[{{$key}}])  ? arrayCommission[{{$key}}]-(arrayLimit[{{$key}}]* rate) : 0">
                                {{-- <x-input disabled class="w-full" for="input_{{ $key }}_no_deductible_amount"
                                type="number" id="input_{{ $key }}_no_deductible_amount"
                                wire:model.defer="inputs.{{ $key }}.no_deductible_amount"
                                placeholder="Montant non déductible" class="" required autofocus /> --}}
{{--                                @error('inputs.' . $key . '.no_deductible_amount')--}}
{{--                                <span class="text-xs text-red-600">{{ $message }}</span>--}}
{{--                                @enderror--}}
                            </div>

                        </div>

                        <div class="col-span-1">
                            <button type="button" wire:click="remove( {{ $key  }} )"  class=" hover:bg-red-100 p-1.5 rounded-md ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor"
                                     class="w-4 h-4 stroke-2 stroke-red-500    ">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                </svg>
                            </button>
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
                <div class=" ">
                    <x-button wire:click='store' class=" mt-8 bg-blue-500 ml-auto  hover:bg-blue-600 rounded-sm" >Enregistrer</x-button>
                </div>

            </div>
        </div>
    </div>
</div>
