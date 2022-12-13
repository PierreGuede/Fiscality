<div >



    <form  wire:submit.prevent="save">
        <div x-data="{ reversals_provisions: {{ $reversals_provisions  }}, capital_gain: {{ $capital_gain  }},  currency_transaction_change: {{ $currency_transaction_change  }} } " class="space-y-4  mt-8">

            <div class=" grid grid-cols-12 space-x-4   ">
                <p class="col-span-7 my-auto px-2">Reprises de provisions</p>
                <div class="col-span-4 ">
                    <x-input step="any" type="number" label="" id="reversals_provisions" name="reversals_provisions"
                             wire:model.defer="reversals_provisions" value="{{ old('reversals_provisions') }}"
                             x-model="reversals_provisions"
                             class="w-full " required
                             autofocus/>
                </div>
                <div class="col-span-1 ">

                </div>
            </div>

            <div class=" grid grid-cols-12 space-x-4   ">
                <p class="col-span-7 my-auto px-2">Produits financier </p>
                <div class="col-span-4 ">
                    <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                             wire:model.defer="" x-bind:value="{{ $total_financial_product  }}" class="w-full "
                             required
                             autofocus
                    />
                </div>
                <div class="  col-span-1 flex mx-auto my-auto ">
                    <button type="button" onclick="Livewire.emitTo('deduction.edit-financial-product', 'openASide')"
                            class="focus:outline-none hover:bg-gray-100 p-1.5 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="  stroke-2  w-6 w-6 stroke-gray-500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </button>

                    <button type="button" onclick="Livewire.emitTo('deduction.detail-financial-product', 'openASide')"
                            class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5  stroke-blue-500 stroke-2 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>



                </div>

            </div>

            <div class=" grid grid-cols-12 space-x-4   ">
                <p class="col-span-7 my-auto px-2">Plus-valu sur cessions à réintégrer</p>
                <div class="col-span-4 ">
                    <x-input step="any" type="number" label="" id="capital_gain" name="capital_gain"
                             wire:model.defer="capital_gain" value="{{ old('capital_gain') }}" class="w-full " required
                             x-model="capital_gain"
                             autofocus/>
                </div>
                <div class="col-span-1 ">

                </div>

            </div>

            <div class=" grid grid-cols-12 space-x-4   ">
                <p class="col-span-7 my-auto px-2">Variation de l'écart de conversion</p>
                <div class="col-span-4 ">
                    <x-input step="any" type="number" label="" id="username" name="username"
                             wire:model.defer="currency_transaction_change" value="{{ old('username') }}"
                             x-model="currency_transaction_change"
                             class="w-full " required
                             autofocus/>
                </div>
                <div class="col-span-1 ">

                </div>

            </div>

            <div class=" grid grid-cols-12 space-x-4   ">
                <p class="col-span-7 my-auto px-2">Total</p>
                <div class="col-span-4 ">
                    <x-input :disabled="true" step="any" type="number" label="" id="total" name="total"
                             x-bind:value="Number(reversals_provisions) + Number(capital_gain) + Number(currency_transaction_change) + {{ $total_financial_product  }}"
                             class="w-full " required
                             autofocus/>
                </div>
                <div class="col-span-1 ">

                </div>

            </div>

        </div>

        <div class="w-11/12" >

        <x-button  type="submit"  class="ml-auto mt-8" >Enregistrer</x-button>
        </div>
    </form>


    @livewire('deduction.edit-financial-product', ['company' => $company])
    @livewire('deduction.detail-financial-product', ['company' => $company])
</div>
