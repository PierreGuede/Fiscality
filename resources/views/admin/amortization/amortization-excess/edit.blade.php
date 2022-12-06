<x-company-layout :company="$company" >

    <x-tax-result.content-wrapper :company="$company" >

    <div class="w-full  min-h-screen" >
        <x-title>Surplus d'amortissement</x-title>

        <div class="max-w-5xl w-full mx-auto">
            <form x-data="{ taux_use: {{ $excess->taux_use }} , taux_recommended: {{ $excess->taux_recommended }}, dotation: {{ $excess->dotation }} }" class="mt-10 space-y-5" action="{{ route('amortization.amortization-excess.update',['company'=>$company->id,'excess'=>$excess->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div>
                <x-input type="text" label="Catégories d'immobilisation" id="category_imo" name="category_imo"
                         value="{{ old('category_imo',$excess->category_imo) }}" class="block w-full" required autofocus />
                    @error('data.category_imo')
                         <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-input type="text" label="Désignation (immobilisation)" id="designation" name="designation"
                             value="{{ old('designation',$excess->designation) }}" class="block w-full" required autofocus />
                    @error('data.designation')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-input x-model="dotation" type="text" label="Dotation comptabilisée" id="dotation" name="dotation"
                             value="{{ old('dotation',$excess->dotation) }}" class="block w-full" required autofocus />
                    @error('data.dotation')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-input x-model="taux_use" min="0" max="100" step="any" type="number" label="Taux d'armortissement utilisé (%)" id="taux_use" name="taux_use"
                             value="{{ old('taux_use',$excess->taux_use) }}" class="block w-full" required autofocus />
                    @error('data.taux_use')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-input x-model="taux_recommended" min="0" max="100" step="any" type="number" label="Taux d'armortissement recommandé (%)" id="taux_recommended" name="taux_recommended"
                             value="{{ old('taux_recommended',$excess->taux_recommended) }}" class="block w-full" required autofocus />
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
                               x-bind:value="((taux_use - taux_recommended) * dotation) / taux_use " class="block w-full" required autofocus />
                </div>

                <div class="flex gap-x-3 justify-end">
                    <x-button.link href="{{ route('amortization.amortization-excess', $company->id)  }}"  wire:click="$emit('closeModal')" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button.link>
                    <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
                </div>
            </form>


        </div>

    </div>
        </x-tax-result.content-wrapper>


</x-company-layout>
