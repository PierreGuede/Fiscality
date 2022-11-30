<div >

        @if($total_financial_product == 0)
            @livewire('deduction.create-financial-product', ['company' => $company])
         @endif

    <form  wire:submit.prevent="save">
        <div x-data="{ reversals_provisions: 0, capital_gain: 0,  currency_transaction_change: 0 } " class="space-y-4  mt-8">

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
                <p class="col-span-7 my-auto px-2">Produits financiers </p>
                <div class="col-span-4 ">
                    <x-input :disabled="true" step="any" type="number" label="" id="username" name="username"
                             wire:model.defer="" x-bind:value="{{ $total_financial_product  }}" class="w-full "
                             required
                             autofocus
                    />
                </div>
                <div class="col-span-1 mx-auto my-auto ">
                    <button type="button" onclick=" Livewire.emitTo('deduction.create-financial-product', 'openASide')"
                            class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md">
                        <svg class="  stroke-2 stroke-blue-50 w-6 w-6 stroke-blue-500 "
                             xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </button>

                </div>

            </div>

            <div class=" grid grid-cols-12 space-x-4   ">
                <p class="col-span-7 my-auto px-2">Plus-value sur cessions à réintégrer</p>
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

</div>
