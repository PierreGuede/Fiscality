<div class="py-10 px-10 w-full " >
    <div>
        <h5 class="text-base text-gray-600 font-semibold" >Véhicule de Toursime</h5>
    </div>

    <form x-data="{realTaxRate: 20 }"  class="mt-10 space-y-5" wire:submit.prevent="save">
            <div>
                 <x-input wire:model.defer="value" type="number" step="any" label="Véhicules concernés" id="name" name="name"
                     value="{{ old('value') }}" class="block w-full"  autofocus />
                @error('value')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <x-input wire:model.defer="rate" type="number" step="any" label="Taux" id="rate" name="rate"
                         value="{{ old('value') }}" class="block w-full"  autofocus />
                @error('value')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>



        <div class="flex gap-x-3 justify-end">
            <x-button type="button" wire:click="$emit('closeModal')" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
            <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
        </div>
    </form>

</div>
