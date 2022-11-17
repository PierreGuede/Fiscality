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
    <div x-data="{ arrayLimit: @js($arr_sum) ,sum:'' }"
         class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12">
        <h2 class="text-2xl font-bold text-gray-7002 py-8">Frais d'assistance</h2>

        <form x-data="globalData" >
            <h5 class="text-xl font-semibold text-gray-700" > Frais généraux </h5>
            <div class="w-full h-0.5 bg-blue-300" ></div>
            <div class=" ml-6 mt-4 space-y-4 ">
                <div class="grid grid-cols-12 gap-x-4">
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-2">Compte de charges </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-7">Intitulé </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-3">Montant </h5>
                </div>

                <div class="" >
                    @foreach($inputs as  $key => $value)
                        <div class="flex gap-x-2 items-center ">

                            <div class="grid grid-cols-12 gap-x-4 space-y-2">
                                <div class="col-span-2">
                                    <x-input :disabled="true"
                                        class="w-full" for="input_{{ $key }}_account"
                                         type="number" id="input_{{ $key }}_account"
                                         wire:model.defer="inputs.{{ $key }}.account"
                                          class="" required autofocus />

                                </div>

                                <div class="col-span-7">
                                    <x-input :disabled="true" for="input_{{ $key }}_name"
                                        type="text" id="input_{{ $key }}_name"
                                        wire:model.defer="inputs.{{ $key }}.name"
                                        class="" required autofocus />
                                </div>

                                <div class="col-span-3">
                                    <x-input :disabled="true" type="number" label="" id="delay_condition" name="" wire:model.defer="inputs.{{ $key }}.amount"
                                             value="{{ old('delay_condition') }}" class="block w-full" required x-model="arrayLimit[{{ $key }}]"
                                             autofocus/>
                                </div>

                            </div>

                            <div class="col-span-1">
                            </div>
                        </div>
                    @endforeach
                </div>

                <div>

                </div>


            </div>

            <div  class="mt-2 space-y-3 ">
                <p class="text-sm text-gray-400">Total Frais généraux</p>
                    <x-input :disabled="true" type="number" label="Total Frais généraux" id="delay_condition" name="" x-bind:value="arrayLimit.reduce((acc, next) => Number(acc) + Number(next) ,0)"
                             class="block w-full" required autofocus/>
                <x-input :disabled="true" type="number" label="Montant des FAT" id="delay_condition" name="" wire:model.defer="fat_amount"
                          class="block w-full" required autofocus/>

                    <x-input :disabled="true" type="number" label="Limite de déduction" id="delay_condition" name="" x-bind:value="arrayLimit.reduce((acc, next) => Number(acc) + Number(next) ,0) * 5/100"
                             class="block w-full" required autofocus/>

                    <x-input :disabled="true" type="number" label="Montant à réintéger" id="delay_condition" name="" x-bind:value="$wire.fat_amount - (arrayLimit.reduce((acc, next) => Number(acc) + Number(next) ,0) * 0.5)"
                             class="block w-full" required autofocus/>
            </div>

            <div class="mt-4 flex justify-end  " >
                <x-button type="button" wire:click="store" >Enregistrer</x-button>
            </div>
        </form>
    </div>
</div>
