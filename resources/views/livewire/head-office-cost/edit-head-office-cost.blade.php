<div class=""  x-data="{ arr_sum: [], rate: {{ $rate  }}  }">
    <form class=" " action=" " wire:submit.prevent="save">
        <div class="flex flex-row-reverse" >

        <div class="w-auto space-y-4 " >


        @foreach ($inputs as $key => $input)
            <div>


                <div class="flex gap-x-4 ">
                    <div class="w-12">
                        <x-input
                            class="w-full" for="input_{{ $key }}_account"
                            type="number" id="input_{{ $key }}_account" label=''
                            wire:model.defer="inputs.{{ $key }}.account"
                            placeholder="Compte" class="" required autofocus/>
                        @error('inputs.' . $key . '.account')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex-1 w-full">
                        <x-input for="input_{{ $key }}_name"
                                 type="text" id="input_{{ $key }}_name" label='Nom'
                                 wire:model.defer="inputs.{{ $key }}.name"
                                 placeholder="Nom"
                                 class="" required autofocus/>
                        @error('inputs.' . $key . '.name')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex-1 w-full">
{{--                        <p x-init=" arr_sum[{{ $key  }}] = inputs.{{ $key }}.amount" ></p>--}}
                        <x-input class="w-full" for="input_{{ $key }}_amount"
                                 type="number" id="input_{{ $key }}_amount" label='Montant'
{{--                                 x-model="arr_sum[{{ $key  }}]"--}}
                                 wire:model.defer="inputs.{{ $key }}.amount"
                                 placeholder="Compte" class="" required autofocus/>
                        @error('inputs.' . $key . '.amount')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <button wire:click="remove({{ $key }})"
                            class="flex items-center focus:outline-none justify-end px-4 py-3 text-sm text-red-600 cursor-pointer">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endforeach

        <div>

            <button type="button" wire:click="add"
                    class="flex items-center justify-center focus:outline-none px-4 py-2.5 text-sm text-blue-600 cursor-pointer">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                          clip-rule="evenodd"></path>
                </svg>
                <p class="ml-2">Ajouter</p>
            </button>
        </div>
        </div>

            <div class=" w-1/3 space-y-4" x-data="globalData">

            <x-input wire:model.defer="account_result" type="number" label="Résultat Comptable" id="account_result"
                     name="account_result"
                     value="{{ old('account_result') }}" class="block w-full" required autofocus/>

            <x-input wire:model.defer="total_reintegration" type="number" label="Total Réintegration"
                     id="total_reintegration" name="total_reintegration"
                     value="{{ old('total_reintegration') }}" class="block w-full" required autofocus/>

            <x-input wire:model.defer="total_deduction" type="number" label="Total Déduction" id="total_deduction"
                     name="total_deduction"
                     value="{{ old('total_deduction') }}" class="block w-full" required autofocus/>

            <x-input wire:model.defer="taxable_income_before_restatement_head_office_costs" type="number"
                     label="Résultat fiscal avant retraitement frais de siège"
                     id="taxable_income_before_restatement_head_office_costs"
                     name="taxable_income_before_restatement_head_office_costs"
                     value="{{ old('taxable_income_before_restatement_head_office_costs') }}" class="block w-full"
                     required autofocus/>

            <x-input wire:model.defer="basis_calculating_deduction_limit" type="number"
                     label="Base de calcul du plafond de déduction" id="basis_calculating_deduction_limit"
                     name="basis_calculating_deduction_limit"
                     x-bind:value=" {{ $taxable_income_before_restatement_head_office_costs }} + arr_sum.reduce((acc, next) => Number(acc) + Number(next), 0)"
                     class="block w-full" required autofocus/>

            <x-input wire:model.defer="rate" type="number" min="0" max="100" label="Taux" id="rate" name="rate"
                     x-model="rate" value=" {{ old('rate', $rate)  }} " class="block w-full" required autofocus/>

            <x-input wire:model.defer="deductible_head_office_costs" type="number" label="Frais de siège déductibles"
                     id="deductible_head_office_costs" name="deductible_head_office_costs"
                     x-bind:value=" ({{ $taxable_income_before_restatement_head_office_costs }} + arr_sum.reduce((acc, next) => Number(acc) + Number(next), 0)) * (rate/100)"
                     class="block w-full" required autofocus/>

            <x-input wire:model.defer="non_deductible_head_office_costs" type="number"
                     label="Frais de siège non déductibles" id="non_deductible_head_office_costs"
                     name="non_deductible_head_office_costs"
                     x-bind:value=" arr_sum.reduce((acc, next) => Number(acc) + Number(next), 0) - ({{ $taxable_income_before_restatement_head_office_costs }} + arr_sum.reduce((acc, next) => Number(acc) + Number(next), 0) * (rate/100))"
                     class="block w-full" required autofocus/>
        </div>

        </div>
        <x-button wire:click="save">Enregistrer</x-button>

    </form>
</div>
