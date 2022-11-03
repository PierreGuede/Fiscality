<div>
    <div class="w-full mt-4 space-y-8 ">
        @foreach ($inputs as $key => $input)
            <div>
                <div class="flex gap-x-4 ">
                    <div class="w-12">
                        <x-input class="w-full" for="input_{{ $key }}_compte"
                            type="text" id="input_{{ $key }}_compte" label='Compte'
                            wire:model.defer="inputs.{{ $key }}.compte"
                            placeholder="Compte" class="" required autofocus />
                        @error('inputs.' . $key . '.compte')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex-1 w-full">
                        <x-input :disabled="count($provision) > $key" for="input_{{ $key }}_designation"
                            type="text" id="input_{{ $key }}_designation" label='Nom'
                            wire:model.defer="inputs.{{ $key }}.designation" placeholder="Nom"
                            class="" required autofocus />
                        @error('inputs.' . $key . '.compte')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex-1 w-full">
                        <x-input class="w-full" for="input_{{ $key }}_amount"
                            type="text" id="input_{{ $key }}_amount" label='Compte'
                            wire:model.defer="inputs.{{ $key }}.amount"
                            placeholder="Compte" class="" required autofocus />
                        @error('inputs.' . $key . '.amount')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>


                    @if (count($provision) <= $key)
                        <button wire:click="removeInput({{ $key }})"
                            class="flex items-center justify-end px-4 py-3 text-sm text-red-600 cursor-pointer">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    @endif
                </div>
            </div>
        @endforeach

        <div>

            <button type="button" wire:click="addProvisionInput"
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
        <x-button wire:click='store' class="p-2 bg-blue-500 hover:bg-blue-600 rounded-sm" >Enregistrer</x-button>

    </div>
</div>
