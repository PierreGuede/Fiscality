<div>

    @if($accounting_result)
        @livewire('account-result.details-account-result', [ 'company' => $company ])
    @endif

        @if(is_null($accounting_result))
    <form class=" mt-4 shadow-lg shadow-blue-700 " wire:submit.prevent="store">
        <div class=" bg-white rounded-md ">
            <div class="p-6">
                <div class="mb-6">
                    <select x-model="$wire.state"
                            class="w-4/12 px-3 py-2 rounded-md focus:outline-none focus:ring-4 focus:ring-blue-500/20 border border-gray-300"
                            name="fill_intype" id="">
                        <option value="fillIn">Je renseigne mon résultat comptable</option>
                        <option value="unfilled">Je laisse l'application me calculer mon résultat comptable</option>
                    </select>
                </div>

                @if( $state == 'fillIn' )
                    <div class=" w-4/12 ">
                        <x-input class="w-full" for=""
                                 type="number" id="total_incomes_expenses" label='Total résultat comptable'
                                 wire:model.defer="total_incomes_expenses"
                                 placeholder="Total résultat comptable" class="" required autofocus/>
                        @error('total_incomes_expenses')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4 ">
                        <x-button class=""> Enregistrer</x-button>
                    </div>
                @endif

                @if( $state == 'unfilled' )
                    <section class="items-center w-full h-full  ">
                        <div class="px-6 py-4 mx-auto text-left  rounded ">


                            <p class="pb-4 text-xl text-gray-700 font-semibold ">Produit</p>


                            <div class="w-full mt-4 space-y-8 ">
                                @foreach ($income_inputs as $key => $input)
                                    <div>
                                        <div class="flex gap-x-4 ">
                                            <div class="w-12">
                                                <x-input :disabled="count($incomes) > $key"
                                                         class="w-full" for="input_{{ $key }}_account"
                                                         type="number" id="input_{{ $key }}_account" label=''
                                                         wire:model.defer="income_inputs.{{ $key }}.account"
                                                         placeholder="Compte" class="" required autofocus/>
                                                @error('income_inputs.' . $key . '.account')
                                                <span class="text-xs text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="flex-1 w-full">
                                                <x-input :disabled="count($incomes) > $key" for="input_{{ $key }}_name"
                                                         type="text" id="input_{{ $key }}_name" label='Nom'
                                                         wire:model.defer="expense_inputs.{{ $key }}.name"
                                                         placeholder="Nom"
                                                         class="" required autofocus/>
                                                @error('income_inputs.' . $key . '.name')
                                                <span class="text-xs text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="flex-1 w-full">
                                                <x-input class="w-full" for="input_{{ $key }}_amount"
                                                         type="number" id="input_{{ $key }}_amount" label='Montant'
                                                         wire:model.defer="income_inputs.{{ $key }}.amount"
                                                         placeholder="Compte" class="" required autofocus/>
                                                @error('income_inputs.' . $key . '.amount')
                                                <span class="text-xs text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            @if (count($expenses) <= $key)
                                                <button wire:click="removeIncomeInput({{ $key }})"
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
                            {{--                            <div class="mt-4 text-right">--}}
                            {{--                                <button type="button" class="w-1/3 p-2 text-center text-white bg-green-500 rounded-md"--}}
                            {{--                                    wire:click="nextStep">Charges</button>--}}
                            {{--                            </div>--}}
                        </div>
                        {{--                    @endif--}}
                        {{--                    @if ($calculIncome == 2)--}}
                        <div class="px-6 py-4 mx-auto space-y-6 text-left bg-white rounded  ">
                            <p class="pb-4 text-xl text-gray-700 font-semibold ">Charges</p>

                            @foreach ($expense_inputs as $key => $input)
                                <div>
                                    <div class="flex gap-x-4 ">
                                        <div class="w-12">
                                            <x-input :disabled="count($expenses) > $key"
                                                     class="w-full" for="input_{{ $key }}_account"
                                                     type="number" id="input_{{ $key }}_account" label=''
                                                     wire:model.defer="expense_inputs.{{ $key }}.account"
                                                     placeholder="Compte" class="" required autofocus/>
                                            @error('expense_inputs.' . $key . '.account')
                                            <span class="text-xs text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="flex-1 w-full">
                                            <x-input :disabled="count($expenses) > $key" for="input_{{ $key }}_name"
                                                     type="text" id="input_{{ $key }}_name" label='Nom'
                                                     wire:model.defer="expense_inputs.{{ $key }}.name" placeholder="Nom"
                                                     class="" required autofocus/>
                                            @error('expense_inputs.' . $key . '.name')
                                            <span class="text-xs text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="flex-1 w-full">
                                            <x-input class="w-full" for="input_{{ $key }}_amount"
                                                     type="number" id="input_{{ $key }}_amount" label='Montant'
                                                     wire:model.defer="expense_inputs.{{ $key }}.amount"
                                                     placeholder="Compte" class="" required autofocus/>
                                            @error('expense_inputs.' . $key . '.amount')
                                            <span class="text-xs text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        @if (count($expenses) <= $key)
                                            <button wire:click="removeExpenseInput({{ $key }})"
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
                            <div class="">
                                <x-button class="ml-auto" wire:click="store">Enregistrer</x-button>
                                {{--                                <button type="button"--}}
                                {{--                                    class="w-1/3 p-2 text-center text-white bg-green-500 rounded-md"--}}
                                {{--                                    wire:click="nextStep">Finir</button>--}}
                            </div>
                        </div>
                    </section>
                @endif


            </div>

    </form>
    @endif
</div>
