<div class="py-10 px-10 w-full " >
    <div>
        <h5 class="text-base text-gray-600 font-semibold" >Surplus d'amortissement</h5>
    </div>

    <form x-data="{ taux_use: 0, taux_recommended: 0, dotation: 0 }" class="mt-10 space-y-5" wire:submit.prevent="save">
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

        <div>
            <x-input x-model="taux_use" wire:model.defer="data.taux_use" min="0" max="100" step="any" type="number" label="Taux d'armortissement utilisé (%)" id="taux_use" name="taux_use"
                     value="{{ old('taux_use') }}" class="block w-full" required autofocus />
            @error('data.taux_use')
            <span class="text-xs text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input x-model="taux_recommended" wire:model.defer="data.taux_recommended" min="0" max="100" step="any" type="number" label="Taux d'armortissement recommandé (%)" id="taux_recommended" name="taux_recommended"
                     value="{{ old('taux_recommended') }}" class="block w-full" required autofocus />
            @error('data.taux_recommended')
            <span class="text-xs text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input   type="text" label="Ecart sur le taux d'amortissement" id="ecart" name="ecart"
                     x-bind:value="taux_use - taux_recommended" class="block w-full" required autofocus />
        </div>

        <div>
            <x-input   type="text" label="Amortisement non déductible" id="ecart" name="ecart"
                       x-bind:value="taux_recommended > 0 ? (dotation*((taux_use - taux_recommended)/100 )) / (taux_use/100) : 0 " class="block w-full" required autofocus />
        </div>

        <div class="flex gap-x-3 justify-end">
            <x-button type="button" wire:click="$emit('closeModal')" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
            <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
        </div>
    </form>

</div>
