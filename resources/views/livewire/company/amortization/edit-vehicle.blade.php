<div class="py-10 px-10 w-full " >
    <div>
        <h5 class="text-base text-gray-600 font-semibold" >Véhicule de Toursime</h5>
    </div>

    <form x-data="{ value: {{ $data['value']  }}, plafond: {{ $data['plafond']  }}, dotation: {{ $data['dotation'] }} }" class="mt-10 space-y-5" wire:submit.prevent="save">
        <x-input wire:model.defer="data.name" type="text" label="Véhicules concernés" id="name" name="name"
                 value="{{ old('name') }}" class="block w-full" required autofocus />

        <x-input wire:model="data.value" x-model="value" type="number" label="Valeur d'origine ou base d'amortissement" id="value" name="value"
                 value="{{ old('value') }}" class="block w-full" required autofocus />

        <x-input wire:model.defer="data.plafond" x-model="plafond" type="number" label="Plafond base d'amortissement" id="plafond" name="plafond"
                 value="{{ old('plafond') }}" class="block w-full" required autofocus />

        <x-input :disabled="true"  type="number" label="Ecart" id="ecart" name="ecart"
                 x-bind:value="value - plafond" class="block w-full" required autofocus />

        <x-input wire:model.defer="data.dotation" x-model="dotation" type="number" label="Dotation eux amortissement comptabilisée" id="dotation" name="dotation"
                 x-bind:value="" class="block w-full" required autofocus />

        <x-input :disabled="true"  type="number" label="Amortissement non deductible" id="deductible_amortization" name="deductible_amortization"
                 x-bind:value=" value > 0 ? (dotation * (value - plafond)) / value : 0" class="block w-full" required autofocus />

        <x-input wire:model.defer="data.date" type="date" label="Date d'achat" id="date" name="date"
                 value="{{ old('date', $data['date']) }}" class="block w-full" required autofocus />

        <div class="flex gap-x-3 justify-end">
            <x-button type="button" wire:click="$emit('closeModal')" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
            <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
        </div>
    </form>

</div>
