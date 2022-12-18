<div class="py-10 px-10 w-full ">
    <div>
        <h5 class="text-base text-gray-600 font-semibold">Surplus d'amortissement</h5>
    </div>

    <form x-data="{
                    taux_use: 0,
                    taux_recommended: @js($data['taux_recommended']),
                    dotation: 0
                   }"
          class="mt-10 space-y-5" wire:submit.prevent="save">

        <div class="space-y-2">

            <x-native-select label="Catégories d'immobilisation"
                             wire:model="data.category_imo"
                             placeholder="">
                @foreach($excessAmortzationCategory as $value)
                    <option value="{{ $value->id  }}">{{ $value->name  }}</option>
                @endforeach
            </x-native-select>

            <x-native-select label="Désignation (immobilisation)"
                             wire:model="data.excess_amortzation_category_item_id"
                             placeholder="">
                @foreach($excessAmortzationCategoryItem as $value)
                    <option value="{{ $value->id  }}">{{ $value->name  }} - {{ $value->rate  }}%</option>
                @endforeach
            </x-native-select>

            <div>
                <x-input x-model="dotation" wire:model.defer="data.dotation" type="number"
                         label="Dotation comptabilisée" id="dotation" name="dotation"
                         value="{{ old('dotation') }}" class="block w-full" required autofocus/>
                {{--            @error('data.dotation')--}}
                {{--            <span class="text-xs text-red-600">{{ $message }}</span>--}}
                {{--            @enderror--}}
            </div>

            <div>
                <x-input x-model="taux_use" wire:model.defer="data.taux_use" min="{{$data['taux_recommended']}} " max="100" step="any" type="number"
                         label="Taux d'armortissement utilisé (%)" id="taux_use" name="taux_use"
                         value="{{ old('taux_use') }}" class="block w-full" required autofocus/>
                {{--            @error('data.taux_use')--}}
                {{--            <span class="text-xs text-red-600">{{ $message }}</span>--}}
                {{--            @enderror--}}
            </div>

            <div>
                <x-input  :disabled="true" wire:model="data.taux_recommended" min="0" max="100"
                         step="any" type="number"
                         label="Taux d'armortissement recommandé ({{ $data['taux_recommended'] }} %)"
                         id="taux_recommended" name="taux_recommended"
                         value="{{ old('taux_recommended') }}" class="block w-full" required autofocus/>
                {{--            @error('data.taux_recommended')--}}
                {{--            <span class="text-xs text-red-600">{{ $message }}</span>--}}
                {{--            @enderror--}}
            </div>

            <div>
                <x-input :disabled="true" type="number" step="any" label="Ecart sur le taux d'amortissement" id="ecart"
                         name="ecart"
                         x-bind:value="taux_use - taux_recommended" class="block w-full" required autofocus/>
            </div>

            <div>
                <x-input type="number" step="any" label="Amortisement non déductible" id="ecart" name="ecart"
                         x-bind:value="taux_recommended > 0 ? (dotation*((taux_use - taux_recommended)/100 )) / (taux_use/100) : 0 "
                         class="block w-full" required autofocus/>
            </div>

            <div class="flex gap-x-3 justify-end mt-4">
                <x-button type="button" wire:click="$emit('closeModal')" variant="neutral"
                          class="w-36">   {{ __('Annuler') }} </x-button>
                <x-button type="submit" class="w-36">   {{ __('Enregistrer') }} </x-button>
            </div>
        </div>
    </form>

</div>
