<div>
    <form wire:submit.prevent="company" {{-- method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data" --}}>

        @if ($currentStep == 4)
            <div class="step-one">
                <x-label for="name" class="text-center" :value="__('Repetez le nom de l\'entreprise pour continuer')" />
                <p class="p-2 text-xl text-center text-red-800">
                    @error('name')
                        {{ $message }}
                    @enderror
                </p>
                <x-input type="text" id="name" wire:model="name" {{-- name="name" --}} class="block w-1/2 mx-auto"
                    value="" required autofocus />
            </div>
        @endif

        @if ($currentStep == 2)
            <div class="step-2">
                <section class="items-center w-full h-full p-4 mt-6 ">
                    <div class="grid grid-cols-3 grid-rows-2 gap-4">
                        <div
                            class="p-2 text-center transition duration-200 rounded-md cursor-pointer bg-slated-500 hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1">
                            <p class="p-2 text-white" wire:click="AccountResult"> Faire mon Resultat comptable </p>
                        </div>
                        <div
                            class="p-2 text-center transition duration-200 rounded-md cursor-pointer bg-slated-500 hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1">
                            <p class="p-2 text-white" wire:click="impotcalcul"> Calculer les impots </p>
                        </div>
                        <div
                            class="p-2 text-center transition duration-200 rounded-md cursor-pointer bg-slated-500 hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1">
                            <p class="p-2 text-white"> Faire mon Resultat Fiscal </p>
                        </div>
                        <div
                            class="p-2 text-center transition duration-200 rounded-md cursor-pointer bg-slated-500 hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1">
                            <p class="p-2 text-white"> Calculer mes amortissements </p>
                        </div>
                        <div
                            class="p-2 text-center transition duration-200 rounded-md cursor-pointer bg-slated-500 hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1">
                            <p class="p-2 text-white"> Calculer les Provision et charges provisionnelles </p>
                        </div>
                        <div
                            class="p-2 text-center transition duration-200 rounded-md cursor-pointer bg-slated-500 hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1">
                            <p class="p-2 text-white"> Voir les Autres réintégration </p>
                        </div>
                    </div>
                </section>
            </div>
        @endif

        @if ($currentStep == 3)
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
        @if ($currentStep == 1)
            <div class="">
                <svg wire:click="returnBack" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor"
                    class="w-8 h-8 p-2 transition duration-200 bg-white rounded-full hover:shadow-md">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>

            </div>
            <div class="flex step-one">
                <section class="items-center w-2/3 h-full p-4 ">
                    {{-- @if ($calculIncome == 1) --}}
                    <div class="px-6 py-4 mx-auto text-left bg-white rounded shadow-lg">
                        <p class="pb-4 text-xl">Produit</p>
                        @foreach ($income as $income)
                            <div class="flex space-y-2">
                                <div class="w-2/3 mt-6">
                                    <p>{{ $income->name }}</p>
                                </div>
                                <div class="w-1/3">
                                    <x-input type="text" id="name" wire:model="incomeList.{{ $income->id }}"
                                        class="" wire:keydown="sumIncome" required autofocus />
                                </div>
                            </div>
                        @endforeach
                        <div class="mt-4 text-right">
                            <button type="button" class="w-1/3 p-2 text-center text-white bg-green-500 rounded-md"
                                wire:click="increateIncome">Charges</button>
                        </div>
                    </div>
                    {{-- @endif --}}
                    @if ($calculIncome == 2)
                        <div class="px-6 py-4 mx-auto text-left bg-white rounded shadow-lg">
                            @foreach ($expense as $expense)
                                <div class="flex space-y-2">
                                    <div class="w-2/3 mt-6">
                                        <p>{{ $expense->name }}</p>
                                    </div>
                                    <div class="w-1/3">
                                        <x-input type="text" id="name"
                                            wire:model="expenseList.{{ $expense->id }}" class=""
                                            wire:keydown="sumExpense" required autofocus />
                                    </div>
                                </div>
                            @endforeach
                            <div class="mt-4 text-right">
                                <button type="button" class="w-1/3 p-2 text-center text-white rounded-md bg-slated-500"
                                    wire:click="decreateIncome">Produits</button>
                                <button type="button" class="w-1/3 p-2 text-center text-white bg-green-500 rounded-md"
                                    wire:click="increateIncome">Finir</button>
                            </div>
                        </div>
                    @endif
                </section>

                @if ($calculIncome == 1 || $calculIncome == 2)
                    <section class="items-center w-1/3 p-4 ">
                        <div class="px-6 py-4 mx-auto text-left bg-white rounded shadow-lg">
                            <p class="pb-2 text-xl">Somme Produit: <span
                                    class="pb-1 border-b-2 border-black">{{ $incomeSum }}</span></p>
                            <p class="pb-2 text-xl">Somme Charges: <span
                                    class="pb-1 border-b-2 border-black">{{ $expenseSum }}</span></p>
                            <p class="pb-2 text-xl">Resultat comptable: <span
                                    class="pb-1 border-b-2 border-black">{{ $incomeSum - $expenseSum }}</span></p>
                        </div>
                    </section>
                @endif
            </div>
            @if ($calculIncome == 3)
                <section class="items-center inline w-10/12 p-4 mx-auto">
                    <p class="w-10/12 mx-auto "> Voici les resultat de vos calculs comptable</p>
                    <div class="px-6 py-4 mx-auto text-left bg-white rounded shadow-lg">
                        <p class="pb-2 text-xl">Produit: <span class="border-b-2">{{ $incomeSum }}</span></p>
                        <p class="pb-2 text-xl">Charges: <span class="border-b-2">{{ $expenseSum }}</span></p>
                        <p class="pb-2 text-xl">Resultat comptable: <span
                                class="border-b-2">{{ $incomeSum - $expenseSum }}</span></p>
                    </div>
                    <div class="mt-4 text-right">
                        <button type="button" class="w-1/3 p-2 text-center text-white rounded-md bg-slated-500"
                            wire:click="decreateIncome">Produits</button>
                        <button type="button" class="w-1/3 p-2 text-center text-white bg-green-500 rounded-md"
                            wire:click="saveAccountingResult({{ $company->id }})">Valider</button>
                    </div>

                </section>
            @endif
        @endif
        @if ($currentStep == 5)
            <div class="">
                <svg wire:click="returnBack" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor"
                    class="w-8 h-8 p-2 transition duration-200 bg-white rounded-full hover:shadow-md">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>

            </div>
            <div class="step-one">
                <x-label for="name" class="text-center" :value="__('Quel est le resultat comptable?')" />
                <p class="p-2 text-xl text-center text-red-800">
                    @error('name')
                        {{ $message }}
                    @enderror
                </p>
                <x-input type="text" id="name" wire:model="ar_value" {{-- name="name" --}}
                    class="block w-1/2 mx-auto" value="" required autofocus />
                <div class="w-full text-center">
                    <button type="button" class="w-1/3 p-2 mt-2 text-center text-white bg-green-500 rounded-md"
                        wire:click="saveManualAccountingResult({{ $company->id }})">Valider</button>
                </div>
            </div>
        @endif

        @if ($currentStep == 6)
            <div class="flex">
                <div class="w-2/3 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg">
                    @foreach ($im as $im)
                        <div class="flex space-y-2">
                            <div class="w-2/3 mt-6">
                                <p>{{ $im->name }}</p>
                            </div>
                            <div class="w-1/3">
                                <x-input type="text" id="name" wire:model="imList.{{ $im->id }}"
                                    class="" wire:keydown="sumItems" required autofocus />
                            </div>
                        </div>
                    @endforeach
                </div>
                <section class="items-center w-1/3 p-4 ">
                    <div class="px-6 py-4 mx-auto text-left bg-white rounded shadow-lg">
                        <p class="pb-2 text-xl">Produit: <span
                                class="pb-1 border-b-2 border-black">{{ $produit->total_incomes }}</span></p>
                        <p class="pb-2 text-xl">Somme des items: <span
                                class="pb-1 border-b-2 border-black">{{ $imsum }}</span></p>
                        <p class="pb-2 text-xl">Resultat: <span
                                class="pb-1 border-b-2 border-black">{{ $produit->total_incomes - $imsum }}</span></p>
                    </div>
                </section>
            </div>
            <div class="mt-4 text-right">
                <button type="button" class="w-1/3 p-2 text-center text-white bg-green-500 rounded-md"
                    wire:click="GenerateItem({{ $company->id . ',' . $produit->total_incomes }})">Valider</button>
            </div>
        @endif

        <div class="flex justify-between pt-2 pb-2 mt-4 space-x-4 bg-white action-buttons">

            @if ($currentStep == 2)
                <button type="button" class="w-1/3 p-2 text-center text-white bg-gray-500 rounded-md"
                    wire:click="decreaseStep()"> Précédent</button>
                <button type="submit" class="w-1/3 p-2 text-center text-white bg-blue-700 rounded-md"> Finir</button>
            @endif
            @if ($currentStep == 1)
                <div></div>
                <button type="button" class="w-1/3 p-2 text-center text-white bg-green-500 rounded-md"
                    wire:click="increaseStep()"> Suivant</button>
            @endif


        </div>
    </form>
</div>
