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
    <div x-data="{ rent_amount: 0 , rental_period_year: 0, annual_deduction_limit:  @js($annual_deduction_limit), applicable_deduction_limit_days: @js($applicable_deduction_limit_days)   }"
         class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12">

        <h2 class="text-2xl font-bold text-gray-7002 py-8">Surplus des loyers (Véhicule)</h2>

        <form class="" wire:submit.prevent="save">
            <div class="mt-2 space-y-3 ">
                <x-input type="number" label="Montant des loyers(Véhicule de tourisme)" step="any" id="delay_condition" name=""
                         wire:model.defer="rent_amount"  x-model="rent_amount"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>
                <x-input type="number" label="Durée de location au titre de l'annnée (en jour)" step="any" id="delay_condition" name=""
                         wire:model.defer="rental_period_year"  x-model="rental_period_year"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>
                <x-input type="number" label="Limite de déduction applicable" step="any" id="delay_condition" name=""
                         wire:model.defer="annual_deduction_limit"
                         value="{{ old('delay_condition') }}" class="block w-full" required autofocus/>
                <x-input :disabled="true" type="number" step="any" label="Limite de déduction" id="delay_condition" name=""
                         x-bind:value="(annual_deduction_limit * rental_period_year)/applicable_deduction_limit_days" class="block w-full" required autofocus/>
                <x-input :disabled="true" type="number" label="Montant des loyers réintégrer" step="any" id="delay_condition" name=""
                         x-bind:value="((rent_amount - annual_deduction_limit) * rental_period_year)/applicable_deduction_limit" class="block w-full" required autofocus/>
            </div>

            <div class="mt-4 flex justify-end  " >
                <x-button type="submit">Enregistrer </x-button>
            </div>
        </form>
    </div>
</div>
