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
    <div x-data="{ lib_condition_response: 'yes', delay_condition_response: 'yes' , arrayLimit:[],sum:'' }"
         class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12">
        <h2 class="text-2xl font-bold text-gray-7002 py-8">Frais d'assistance</h2>

        <form class="">
            <h5 class="text-xl font-semibold text-gray-700" > Frais généraux </h5>
            <div class="w-full h-0.5 bg-blue-300" ></div>
            <div class=" ml-6 mt-4 space-y-4 ">
                <div class="grid grid-cols-12 gap-x-4">
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-2">Comptede charges </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-7">Intitulé </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-3">Montant </h5>


                </div>


                <div class="" >

                    @foreach($inputs as  $key => $value)
                        <div class="flex gap-x-2 items-center ">

                            <div class="grid grid-cols-12 gap-x-4 space-y-2">
                                <div class="col-span-2">
                                    <x-input :disabled="count($general_cost) > $key"
                                        class="w-full" for="input_{{ $key }}_account"
                                         type="number" id="input_{{ $key }}_account"
                                         wire:model.defer="inputs.{{ $key }}.account"
                                          class="" required autofocus />

                                </div>


                                <div class="col-span-7">
                                    <x-input :disabled="count($general_cost) > $key" for="input_{{ $key }}_name"
                                        type="text" id="input_{{ $key }}_name"
                                        wire:model.defer="inputs.{{ $key }}.name"
                                        class="" required autofocus />
                                </div>

                                <div class="col-span-3">
                                    <x-input type="number" label="" id="delay_condition" name="" wire:model.defer="inputs.{{ $key }}.amount"
                                             value="{{ old('delay_condition') }}" class="block w-full" required x-model="arrayLimit[{{ $key }}]"
                                             autofocus/>
                                </div>


                            </div>

                            <div class="col-span-1">
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
                <p class="text-sm text-gray-400">Total Frais généraux</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="arrayLimit.reduce(function (x, y) {
                    return Number(x) + Number(y);
                }, 0);">
                <x-input type="number" label="Montant des FAT" id="delay_condition" name="" wire:model.defer="inputsAssistance.fat_amount" x-model="sum"
                          class="block w-full" required autofocus/>
                {{-- <x-input type="number" label="Limite de déduction" id="delay_condition" name="" wire:model.defer="inputsAssistance.limit_deduction"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/> --}}
                <p class="text-sm text-gray-400">Limite de déduction</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="arrayLimit.reduce(function (x, y) {
                    return (Number(x) + Number(y))*0.5;
                }, 0);">

                <p class="text-sm text-gray-400">Montant à réintéger</p>
                <p class="w-full h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600"  x-text="arrayLimit.reduce(function (x, y) {
                    return Number(sum)-((Number(x) + Number(y))*0.5);
                }, 0);">
            </div>

            <div class="mt-4 flex justify-end  " >
                <x-button type="button" wire:click="store" >Enregistrer</x-button>
            </div>
        </form>
    </div>
</div>
