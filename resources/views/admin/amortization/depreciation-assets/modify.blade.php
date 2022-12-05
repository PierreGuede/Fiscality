<x-company-layout :company="$company" >
    <x-tax-result.content-wrapper :company="$company" >

    <div class="w-full  min-h-screen" >

        <div class="max-w-5xl w-full mx-auto">
            <form x-data="{ value: 0, plafond: 25_000_000,dotation: 0 }" class="mt-10 space-y-5" action="{{ route('amortization.depreciation-assets.update',['company'=>$company->id,'depreciation'=>$depreciation->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div>
                    <x-input  type="text" label="Catégories d'immobilisation" id="category_imo" name="category_imo"
                             value="{{ old('category_imo',$depreciation->category_imo) }}" class="block w-full" required autofocus />
                    @error('category_imo')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-input  type="text" label="Désignation (immobilisation)" id="designation" name="designation"
                             value="{{ old('designation',$depreciation->designation) }}" class="block w-full" required autofocus />
                    @error('designation')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-input   type="text" label="Dotation comptabilisée" id="dotation" name="dotation"
                             value="{{ old('dotation',$depreciation->dotation) }}" class="block w-full" required autofocus />
                    @error('dotation')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-x-3 justify-end">
                    <x-button type="button" wire:click="$emit('closeModal')" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
                    <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
                </div>
            </form>


        </div>

    </div>
        </x-tax-result.content-wrapper>

</x-company-layout>
