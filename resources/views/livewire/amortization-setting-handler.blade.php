<div>
    <div class="py-4">
        <p class="text-xl text-slate-700 font-semibold py-4">Amortissement</p>
        <div class="ml-4">
            <div class="ml-4">
                <p class="text-md text-slate-700 font-semibold"> Véhicule de tourisme</p>
                <div class="ml-4">
                    <div class="flex items-center my-3 " >
                        <x-input :disabled="$edit_depreciation_base_limit" type="number" wire:model="depreciation_base_limit"
                                 name="depreciation_base_limit" value="25"
                                 label="Plafond de base d'amortissement" />
                        <div class="space-x-3 px-2" >
                            @if($edit_depreciation_base_limit)
                                <x-form.button wire:click="editDepreciationBaseLimit"  flat orange label="Modifier" />
                            @else
                                <x-form.button type="button" wire:click="editDepreciationBaseLimit" flat orange label="Enregister" />
                            @endif
                            <x-form.button wire:click="resetDepreciationBaseLimit" flat stone label="Réintialiser"  />
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="ml-4">--}}
{{--                <p class="text-md text-slate-700 font-semibold"> Surplus d'amortissement</p>--}}
{{--                <div class="ml-4">--}}
{{--                    <div class="flex items-center my-3 " >--}}
{{--                        <x-input :disabled="$edit_recommended_rate" type="number" wire:model="recommended_rate" name="recommended_rate" value="25" label="Taux d'armortissement recommandé" />--}}
{{--                        <div class="space-x-3 px-2" >--}}
{{--                            @if($edit_recommended_rate)--}}
{{--                                <x-form.button wire:click="editRecommendedRate"  flat orange label="Modifier" />--}}
{{--                            @else--}}
{{--                                <x-form.button wire:click="editRecommendedRate" flat orange label="Enregister" />--}}
{{--                            @endif--}}
{{--                            <x-form.button wire:click="resetRecommendedRate" flat stone label="Réintialiser"  />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


        </div>
    </div>
</div>
