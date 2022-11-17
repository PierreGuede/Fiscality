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

    <div x-data="{ state_donation_data: @js($state_donation_data), donation_gift: @js($donation_gift), turnover: @js($turnover) }"
         class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12">
        <h5 class="text-xl font-semibold text-gray-700 my-6" >Dons à l'état</h5>


        <form  wire:submit.prevent="save">
            <div class="  mt-4 space-y-4 ">
                <div class="grid grid-cols-12 gap-x-4">
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-2">Compte </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-7">Intitulé </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-3">Montant </h5>
                </div>
                <div class=" space-y-3" >

                    @foreach($state_donation_inputs as  $key => $value)
                        <div class="flex gap-x-2 items-center ">

                            <div class="grid grid-cols-12 gap-x-4">
                                <div class="col-span-2">
                                    <x-input type="number" :disabled="count($state_donation) > $key" for="state_donation_inputs_{{ $key }}_account"
                                             label="" id="state_donation_inputs_{{ $key }}_account" name=""
                                             wire:model.defer="state_donation_inputs.{{ $key }}.account"
                                             value="{{ old('delay_condition') }}" class="block w-full" required
                                             autofocus/>
                                </div>

                                <div class="col-span-7">
                                    <x-input type="text" :disabled="count($state_donation) > $key" for="state_donation_inputs_{{ $key }}_name"
                                             label="" id="state_donation_inputs_{{ $key }}_name" name=""
                                             wire:model.defer="state_donation_inputs.{{ $key }}.name"
                                             value="{{ old('delay_condition') }}" class="block w-full" required
                                             autofocus/>
                                </div>

                                <div class="col-span-3">
                                    <x-input type="number"  for="state_donation_inputs_{{ $key }}_amount"
                                             label="" id="state_donation_inputs_{{ $key }}_amount" name=""
                                             wire:model.defer="state_donation_inputs.{{ $key }}.amount"
                                             x-model="state_donation_data[{{ $key  }}]"
                                             value="{{ old('delay_condition') }}" class="block w-full" required
                                             autofocus/>
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>



            </div>

            <div class="mt-6 space-y-4 ">
                <x-input :disabled="true" type="number" label="Total dons à l'Etat ou ses démenbrements" id="delay_condition" name=""
                         wire:model.defer="total_state_donation" class="block w-full" required autofocus/>
                <x-input :disabled="true" type="number" label="Excedent des dons à l'Etat" id="delay_condition" name=""
                        wire:model.defer="surplus_state_donation" class="block w-full" required autofocus/>
            </div>

{{--            CADRE GENERAL--}}

            <div class=" mt-6" >
                <h5 class="text-xl font-semibold text-gray-700 my-6" >Cadre général</h5>
                <div class="mt-2 space-y-4 ">
                    <x-input x-model="turnover" wire:model.defer="turnover" type="number" step="any" label="Chiffre d'affaire" id="turnover" name=""
                             wire:model.defer="turnover" class="block w-full" required autofocus/>
                    <x-input :disabled="true" type="number" step="any" label="Millième du Chiffre d'affaires" id="delay_condition" name=""
                             wire:model.defer="thousandth_turnover" class="block w-full" required autofocus/>
                </div>
            </div>

{{--            Dons & Libéralités--}}

            <div class="my-5">
                <h5 class="text-xl font-semibold text-gray-700 mt-4" >Dons et libéralités</h5>

                <div class="grid grid-cols-12 gap-x-4 my-4">
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-2">Compte </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-7">Intitulé </h5>
                    <h5 class="py-1 text-sm font-semibold text-gray-700 col-span-3">Montant </h5>

                </div>
            <div class="space-y-3" >

            @foreach($donation_gifts_inputs as  $key => $value)
                    <div class="flex gap-x-2 items-center ">

                        <div class="grid grid-cols-12 gap-x-4">

                            <div class="col-span-2">
                                <x-input type="number" :disabled="count($donation_gifts) > $key" for="donation_gifts_inputs_{{ $key }}_account"
                                         label="" id="donation_gifts_inputs_{{ $key }}_account" name=""
                                         wire:model.defer="donation_gifts_inputs.{{ $key }}.account"
                                         value="{{ old('delay_condition') }}" class="block w-full" required
                                         autofocus/>
                            </div>

                            <div class="col-span-7">
                                <x-input type="text" :disabled="count($donation_gifts) > $key" for="donation_gifts_inputs_{{ $key }}_name"
                                         label="" id="donation_gifts_inputs_{{ $key }}_name" name=""
                                         wire:model.defer="donation_gifts_inputs.{{ $key }}.name"
                                         value="{{ old('delay_condition') }}" class="block w-full" required
                                         autofocus/>
                            </div>

                            <div class="col-span-3">
                                <x-input type="number"  for="donation_gifts_inputs_{{ $key }}_amount"
                                         label="" id="donation_gifts_inputs_{{ $key }}_amount" name=""
                                         wire:model.defer="donation_gifts_inputs.{{ $key }}.amount"
                                         x-model="donation_gift[{{ $key }}]"
                                         value="{{ old('delay_condition') }}" class="block w-full" required
                                         autofocus/>
                            </div>

                        </div>

                        <div class="col-span-1">

                        </div>
                    </div>
                @endforeach
            </div>

                <div class="mt-4 space-y-4 ">
                    <x-input :disabled="true" type="number" label="Total dons & libéralités" id="delay_condition" name=""
                             wire:model.defer="total_donation_gift" class="block w-full" required autofocus/>
                    <x-input :disabled="true" type="number" label="Excédent de dons" id="surplus_state" name=""
                             wire:model.defer="surplus_state" class="block w-full" required autofocus/>
                </div>
            </div>

{{--            <div class="mt-96" >--}}

{{--            </div>--}}

        </form>
    </div>
</div>
