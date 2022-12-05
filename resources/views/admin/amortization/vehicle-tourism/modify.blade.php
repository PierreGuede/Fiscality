<x-company-layout :company="$company" >
    <x-tax-result.content-wrapper :company="$company" >

    <div class="w-full  min-h-screen" >

        <div class="max-w-5xl w-full mx-auto">
            <form x-data="{ value: {{ $vehicle->value }}, plafond: 25_000_000,dotation: {{ $vehicle->dotation }} }" class="mt-10 space-y-5" action="{{ route('amortization.tourism-cars.update',['company'=>$company->id,'vehicle'=>$vehicle->id]) }}" method="POST">
                @method('PUT')
                @csrf
                    <x-input  type="text" label="Véhicules concernés" id="name" name="name"
                                value="{{ old('name',$vehicle->name) }}" class="block w-full" required autofocus />

                    <x-input wire:model="data.value" x-model="value" type="number" label="Valeur d'origine ou base d'amortissement" id="value" name="value"
                                value="{{ old('value',$vehicle->value) }}" class="block w-full" required autofocus />

                    <x-input  x-model="plafond" type="number" label="Plafond base d'amortissement" id="plafond" name="plafond"
                                value="{{ old('plafond',$vehicle->plafond) }}" class="block w-full" required autofocus />

                    <x-input :disabled="true"  type="number" label="Ecart" id="ecart" name="ecart"
                                x-bind:value="value - plafond" class="block w-full" required autofocus />

                    <x-input  x-model="dotation" type="number" label="Dotation eux amortissement comptabilisée" id="dotation" name="dotation"
                                x-bind:value="" class="block w-full" required autofocus />

                    <x-input :disabled="true"  type="number" label="Amortissement non deductible" id="deductible_amortization" name="deductible_amortization"
                                x-bind:value=" value > 0 ? (dotation * (value - plafond)) / value : 0" class="block w-full" required autofocus />

                    <x-input  type="date" label="Date d'achat" id="date" name="date"
                                value="{{ old('date',$vehicle->date) }}" class="block w-full" required autofocus />

                    <div class="flex gap-x-3 justify-end">
                        <x-button type="button" wire:click="$emit('closeModal')" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
                        <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
                    </div>
            </form>


        </div>

    </div>
        </x-tax-result.content-wrapper>

</x-company-layout>
