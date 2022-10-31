<div>
    <form >
        @if ($currentStep == 1)
            <div class="">
                <svg wire:click="returnBack" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="rounded-full p-2 bg-white transition duration-200 hover:shadow-md w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>

            </div>
            <div class="space-y-2">
                <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">
                    <p class="p-2 text-white" wire:click="determinateManualAccount"> Faire mon Resultat comptable manuellement</p>
                </div>
                <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">
                    <p class="p-2 text-white" wire:click="determinateAccount">Determiner mon resultat comptable </p>
                </div>
            </div>
        @endif


        @if ($currentStep == 2)
        <div class="">
            <svg wire:click="returnBack" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="rounded-full p-2 bg-white transition duration-200 hover:shadow-md w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
              </svg>

        </div>
        <div class="step-one flex">
            <section class=" w-2/3 p-4 h-full items-center">
                @if ($calculIncome == 1)
                    <div class="bg-white  mx-auto  rounded shadow-lg py-4 text-left px-6">
                        <p class="text-xl pb-4">Produit</p>
                        @foreach ($income as $income)
                        <div class="flex space-y-2">
                            <div class="w-2/3 mt-6"><p>{{ $income->name }}</p></div>
                            <div class="w-1/3">
                                <x-input type="text"
                                id="name"
                                wire:model="incomeList.{{ $income->id }}"
                                class=""
                                required
                                autofocus/>
                            </div>
                        </div>
                        @endforeach
                        <div class="mt-4 text-right">
                            <button type="button" class="w-1/3 text-white rounded-md text-center p-2 bg-green-500" wire:click="increateIncome">Charges</button>
                        </div>
                    </div>
                @endif
                @if ($calculIncome == 2)
                    <div class="bg-white  mx-auto  rounded shadow-lg py-4 text-left px-6">
                        @foreach ($expense as $expense)
                            <div class="flex space-y-2">
                                <div class="w-2/3 mt-6"><p>{{ $expense->name }}</p></div>
                                <div class="w-1/3">
                                    <x-input type="text"
                                    id="name"
                                    wire:model="expenseList.{{ $expense->id }}"
                                    class=""
                                    wire:keydown="sumExpense"
                                    required
                                    autofocus/>
                                </div>
                            </div>
                        @endforeach
                        <div class="mt-4 text-right">
                            <button type="button" class="w-1/3 text-white rounded-md text-center p-2 bg-slated-500" wire:click="decreateIncome">Produits</button>
                            <button type="button" class="w-1/3 text-white rounded-md text-center p-2 bg-green-500" wire:click="increateIncome">Finir</button>
                        </div>
                    </div>
                @endif
            </section>

        </div>
        {{-- @if ($calculIncome == 3)
            <section class="inline w-10/12 mx-auto  p-4  items-center">
                <p class="w-10/12 mx-auto "> Voici les resultat de vos calculs comptable</p>
                <div class="bg-white  mx-auto  rounded shadow-lg py-4 text-left px-6" >
                    <p class="text-xl pb-2">Produit:  <span class="border-b-2">{{ $incomeSum }}</span></p>
                    <p class="text-xl pb-2">Charges:  <span class="border-b-2">{{ $expenseSum }}</span></p>
                    <p class="text-xl pb-2">Resultat comptable:  <span class="border-b-2">{{ $incomeSum - $expenseSum }}</span></p>
                </div>
                <div class="mt-4 text-right">
                    <button type="button" class="w-1/3 text-white rounded-md text-center p-2 bg-slated-500" wire:click="decreateIncome">Produits</button>
                    <button type="button" class="w-1/3 text-white rounded-md text-center p-2 bg-green-500" wire:click="saveAccountingResult({{ $company->id }})">Valider</button>
                </div>

            </section>
            @endif --}}
    @endif
    </form>
</div>
