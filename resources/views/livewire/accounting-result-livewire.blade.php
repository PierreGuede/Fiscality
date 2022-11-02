<div>
    <form>
        @if ($currentStep == 1)
            <div class="">
                <svg wire:click="returnBack" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor"
                    class="w-8 h-8 p-2 transition duration-200 bg-white rounded-full hover:shadow-md">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>

            </div>
            <div class="space-y-2">
                <div
                    class="p-2 text-center transition duration-200 rounded-md cursor-pointer bg-slated-500 hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1">
                    <p class="p-2 text-white" wire:click="determinateManualAccount"> Faire mon Resultat comptable
                        manuellement</p>
                </div>
                <div
                    class="p-2 text-center transition duration-200 rounded-md cursor-pointer bg-slated-500 hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1">
                    <p class="p-2 text-white" wire:click="determinateAccount">Determiner mon resultat comptable </p>
                </div>
            </div>
        @endif


        @if ($currentStep == 2)
            <div class="">
                <svg wire:click="returnBack" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor"
                    class="w-8 h-8 p-2 transition duration-200 bg-white rounded-full hover:shadow-md">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
            </div>
            <div class="flex step-one">
                <section class="items-center w-2/3 h-full p-4 ">
                    @if ($calculIncome == 1)
                        <div class="px-6 py-4 mx-auto text-left bg-white rounded shadow-lg">
                            <p class="pb-4 text-xl">Produit</p>

                            <div class="w-full mt-4 space-y-8 ">
                                @foreach ($inputs as $key => $input)
                                    <div>
                                        <div class="flex gap-x-4 ">
                                            <div class="w-12">
                                                <x-input class="w-full" for="input_{{ $key }}_account"
                                                    type="text" id="input_{{ $key }}_account" label='Compte'
                                                    wire:model.defer="inputs.{{ $key }}.account"
                                                    placeholder="Compte" class="" required autofocus />
                                                @error('inputs.' . $key . '.account')
                                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="flex-1 w-full">
                                                <x-input :disabled="count($incomes) > $key" for="input_{{ $key }}_name"
                                                    type="text" id="input_{{ $key }}_name" label='Nom'
                                                    wire:model.defer="inputs.{{ $key }}.name" placeholder="Nom"
                                                    class="" required autofocus />
                                                @error('inputs.' . $key . '.account')
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


                                            @if (count($incomes) <= $key)
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

                                    <button type="button" wire:click="addIncomeInput"
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

                                {{-- <div class="flex justify-end w-full mt-12">
                                    <button wire:click="submit"
                                        class="px-3 py-1 text-white bg-blue-600 rounded-lg">Submit</button>
                                </div> --}}
                            </div>
                            <div class="mt-4 text-right">
                                <button type="button" class="w-1/3 p-2 text-center text-white bg-green-500 rounded-md"
                                    wire:click="increateIncome">Charges</button>
                            </div>
                        </div>
                    @endif
                    @if ($calculIncome == 2)
                        <div class="px-6 py-4 mx-auto space-y-6 text-left bg-white rounded shadow-lg ">

                            @foreach ($inputs as $key => $input)
                                <div>
                                    <div class="flex gap-x-4 ">


                                        <div class="flex-1 w-full">
                                            <x-input :disabled="count($expenses) > $key" for="input_{{ $key }}_name"
                                                type="text" id="input_{{ $key }}_name" label='Nom'
                                                wire:model.defer="inputs.{{ $key }}.name" placeholder="Nom"
                                                class="" required autofocus />
                                            @error('inputs.' . $key . '.account')
                                                <span class="text-xs text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="flex-1 w-full">
                                            <x-input class="w-full" for="input_{{ $key }}_account"
                                                type="text" id="input_{{ $key }}_account" label='Compte'
                                                wire:model.defer="inputs.{{ $key }}.account"
                                                placeholder="Compte" class="" required autofocus />
                                            @error('inputs.' . $key . '.account')
                                                <span class="text-xs text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        @if (count($expenses) <= $key)
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

                                <button type="button" wire:click="addExpenseInput"
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
                            <div class="mt-4 text-right">
                                {{-- <button type="button"
                                    class="w-1/3 p-2 text-center text-white rounded-md bg-slated-500"
                                    wire:click="decreateIncome">Produits</button> --}}
                                <button type="button"
                                    class="w-1/3 p-2 text-center text-white bg-green-500 rounded-md"
                                    wire:click="increateIncome">Finir</button>
                            </div>
                        </div>
                    @endif
                </section>

            </div>
            @if ($calculIncome == 3)
                <section class="items-center inline w-10/12 p-4 mx-auto">

                    <h4 class="text-3xl font-semibold text-gray-700">
                        Poduits
                    </h4>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Compte</th>
                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($income_data as $value)
                                <tr>
                                    <td>{{ $value['name'] }}</td>
                                    <td>{{ $value['account'] }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h4 class="text-3xl font-semibold text-gray-700">
                        Compte
                    </h4>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Compte</th>
                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($inputs as $value)
                                <tr>
                                    <td>{{ $value['name'] }}</td>
                                    <td>{{ $value['account'] }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <button wire:click='store'>Enregistrer</button>
                </section>
            @endif
        @endif
    </form>
</div>
