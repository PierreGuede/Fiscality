<div x-data="{ total_income: [] }" class="py-10 pl-10 pr-4 w-full " >
    <div x-data="globalData" class="flex justify-between pr-10" >
        <h5 class="text-base text-gray-600 font-semibold" >Produits </h5>
        <p class="text-xl font-semibold text-blue-900"  x-text="formatNumber(sumArray(total_income))"></p>

    </div>

    <form class="mt-10 space-y-3" wire:submit.prevent="save">
        <div class="w-full mt-4 space-y-4 text-sm ">
            @foreach ($inputs as $key => $input)
                <div>
                    <div class="flex gap-x-4 ">
                        <div class="w-12">
                            <x-input :disabled="count($data) > $key"
                                     class="w-full" for="input_{{ $key }}_account"
                                     type="number" id="input_{{ $key }}_account" label=''
                                     wire:model.defer="inputs.{{ $key }}.account"
                                     placeholder="Compte" class="" required autofocus/>
                            @error('inputs.' . $key . '.account')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex-1 w-full">
                            <x-input :disabled="count($data) > $key" for="input_{{ $key }}_name"
                                     type="text" id="input_{{ $key }}_name" label='Nom'
                                     wire:model.defer="inputs.{{ $key }}.name"
                                     placeholder="Nom"
                                     class="" required autofocus/>
                            @error('inputs.' . $key . '.name')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class=" w-32">
                            <x-input class="w-full" for="input_{{ $key }}_amount"
                                     type="number" id="input_{{ $key }}_amount" label='Montant'
                                     x-model="total_income[{{ $key  }}]"
                                     wire:model.defer="inputs.{{ $key }}.amount"
                                     placeholder="Compte" class="" required autofocus/>
                            @error('inputs.' . $key . '.amount')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-12" >
                            @if (count($data) <= $key)
                                <x-form.button wire:click="remove({{ $key }})" flat negative  icon="trash" />
                            @endif
                        </div>

                    </div>
                </div>
            @endforeach

            <div>
                <button type="button" wire:click="add"
                        class="flex items-center justify-center px-4 py-2.5 text-sm text-blue-600 cursor-pointer">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <p class="ml-2">Ajouter</p>
                </button>
            </div>

        <div class="flex gap-x-3 justify-end mr-4">
            <x-button type="button" wire:click="$emit('closeModal')" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
            <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
        </div>
    </form>

</div>
