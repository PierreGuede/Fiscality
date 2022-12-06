<div x-data="{ arr_sum: [], rate: {{ $rate  }}  }">
    <form class=" mt-10 grid grid-cols-2 gap-x-12" action=" " wire:submit.prevent="save">


        <div class="space-y-4" x-data="globalData">

            <x-input :disabled="true" wire:model.defer="account_result" type="text" label="Résultat Comptable" id="account_result"
                     name="account_result"
                     value="{{ old('account_result') }}" class="block w-full" required autofocus/>

            <x-input :disabled="true" wire:model.defer="total_reintegration" type="text" label="Total Réintegration"
                     id="total_reintegration" name="total_reintegration"
                     value="{{ old('total_reintegration') }}" class="block w-full" required autofocus/>

            <x-input :disabled="true" wire:model.defer="total_deduction" type="text" label="Total Déduction" id="total_deduction"
                     name="total_deduction"
                     value="{{ old('total_deduction') }}" class="block w-full" required autofocus/>

            <x-input :disabled="true" wire:model.defer="taxable_income_before_restatement_head_office_costs" type="text"
                     label="Résultat fiscal avant retraitement frais de siège"
                     id="taxable_income_before_restatement_head_office_costs"
                     name="taxable_income_before_restatement_head_office_costs"
                     value="{{ old('taxable_income_before_restatement_head_office_costs') }}" class="block w-full"
                     required autofocus/>

            <x-input :disabled="true" wire:model.defer="basis_calculating_deduction_limit" type="text"
                     label="Base de calcul du plafond de déduction" id="basis_calculating_deduction_limit"
                     name="basis_calculating_deduction_limit"
                     class="block w-full" required autofocus/>

            <x-input :disabled="true" wire:model.defer="rate" type="number" min="0" max="100" label="Taux" id="rate" name="rate"
                     x-model="rate" value=" {{ old('rate', $rate)  }} " class="block w-full" required autofocus/>

            <x-input :disabled="true" wire:model.defer="deductible_head_office_costs" type="text" label="Frais de siège déductibles"
                     id="deductible_head_office_costs" name="deductible_head_office_costs"
{{--                     x-bind:value="deductible_head_office_costs"--}}
                     class="block w-full" required autofocus/>

            <x-input :disabled="true" wire:model.defer="non_deductible_head_office_costs" type="text"
                     label="Frais de siège non déductibles" id="non_deductible_head_office_costs"
                     name="non_deductible_head_office_costs"
{{--                     x-bind:value="non_deductible_head_office_costs"--}}
                     class="block w-full" required autofocus/>
        </div>

        <div class="space-y-4" >

            @foreach ($inputs as $key => $input)
                <div>
                    <div class="flex gap-x-4 ">
                        <div class="w-12">
                            <x-input :disabled="true"
                                     class="w-full" for="input_{{ $key }}_account"
                                     type="number" id="input_{{ $key }}_account" label=''
                                     wire:model.defer="inputs.{{ $key }}.account"
                                     placeholder="Compte" class="" required autofocus/>
                        </div>

                        <div class="flex-1 w-full">
                            <x-input :disabled="true" for="input_{{ $key }}_name"
                                     type="text" id="input_{{ $key }}_name" label='Nom'
                                     wire:model.defer="inputs.{{ $key }}.name"
                                     placeholder="Nom"
                                     class="" required autofocus/>
                        </div>

                        <div class="flex-1 w-full">
                            <x-input :disabled="true" class="w-full" for="input_{{ $key }}_amount"
                                     type="number" id="input_{{ $key }}_amount" label='Montant'
                                     x-model="arr_sum[{{ $key  }}]"
                                     wire:model.defer="inputs.{{ $key }}.amount"
                                     {{--                                 value="{{ old('inputs.{{ $key }}.amount', $inputs.{{ $key }}.amount) }}"--}}
                                     placeholder="Compte" class="" required autofocus/>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </form>
</div>
