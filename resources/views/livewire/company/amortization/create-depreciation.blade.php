<div class="py-10 px-10 w-full " >
    <div>
        <h5 class="text-base text-gray-600 font-semibold" >Amortissement sur biens qui ne sont pas directement liés à l'exploitation</h5>
    </div>

    <form x-data="{ value: 0, plafond: 25_000_000,dotation: 0 }" class="mt-10 space-y-5" wire:submit.prevent="save">

        <div>
            <x-input wire:model.defer="data.category_imo" type="text" label="Catégories d'immobilisation" id="category_imo" name="category_imo"
                     value="{{ old('category_imo') }}" class="block w-full" required autofocus />
            @error('data.category_imo')
            <span class="text-xs text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input wire:model.defer="data.designation" type="text" label="Désignation (immobilisation)" id="designation" name="designation"
                     value="{{ old('designation') }}" class="block w-full" required autofocus />
            @error('data.designation')
            <span class="text-xs text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input x-model="dotation" wire:model.defer="data.dotation" type="number" label="Dotation comptabilisée" id="dotation" name="dotation"
                     value="{{ old('dotation') }}" class="block w-full" required autofocus />
            @error('data.dotation')
            <span class="text-xs text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex gap-x-3 justify-end">
            <x-button type="button" wire:click="$emit('closeModal')" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
            <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
        </div>
    </form>

</div>
