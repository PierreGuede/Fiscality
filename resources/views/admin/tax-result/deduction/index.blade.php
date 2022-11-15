<x-company-layout :company="$company" >
    <h1 class="text-xl font-semibold text-gray-700 ml-4">LES DEDUCTION DE : {{ $company->name }}</h1>
    <form method="POST" action="{{ route('tax-result.deduction.store',$company->id) }}">
        @csrf
        <div class=" ml-6 mt-4 space-y-4" x-data="">
            <div class="space-x-4" >

                   <div class="space-y-4">
                        <div>
                            <div class="flex gap-x-2 items-center  ">
                                <div class="grid grid-cols-12 gap-x-2 ml-4">
                                    <div class="col-span-4">
                                        <x-input type="text" value="Produit des titres émis  par l'état Béninois"   id="delay_condition" name="name[]"
                                             class="block w-full" required autofocus x-model="" />
                                    </div>
                                    <div class="col-span-2">
                                        <x-input type="number" label="Montant net RCM"   id="delay_condition" name="rcm_net_amount[]"
                                             class="block w-full" required autofocus x-model=""/>
                                    </div>
                                    <div class="col-span-2">
                                        <x-input type="number" label="Taux" value="100"   id="delay_condition" name="rate[]"
                                             class="block w-full" required autofocus x-model=""/>
                                    </div>
                                    <div class="col-span-3">
                                        <x-input type="number" label="deductible_amount" disabled   id="delay_condition"
                                             class="block w-full" required autofocus x-model=""/>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div>
                            <div class="flex gap-x-2 items-center  ">
                                <div class="grid grid-cols-12 gap-x-2 ml-4">
                                    <div class="col-span-4">
                                        <x-input type="text" value="Autre réintégration"   id="delay_condition" name="name[]"
                                             class="block w-full" required autofocus x-model="" />
                                    </div>
                                    <div class="col-span-2">
                                        <x-input type="number" label="Montant net RCM"   id="delay_condition" name="rcm_net_amount[]"
                                             class="block w-full" required autofocus x-model=""/>
                                    </div>
                                    <div class="col-span-2">
                                        <x-input type="number" label="Taux" value="70"   id="delay_condition" name="rate[]"
                                             class="block w-full" required autofocus x-model=""/>
                                    </div>
                                    <div class="col-span-3">
                                        <x-input type="number" label="deductible_amount" disabled   id="delay_condition"
                                             class="block w-full" required autofocus x-model=""/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-4">
                        <p class="text-xl font-bold">TOTAL DES PRODUITS FINANCIERS</p>
                        <p class="w-full bg-white h-10 p-2 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none align-center focus:border-blue-600" x-text="">
                    </div>
            </div>
            </div>
            <div class=" w-full align-center mt-4 items-end">
                <x-button wire:click='store' class=" tp-2 bg-blue-500 w-1/3  hover:bg-blue-600 rounded-sm" >Enregistrer</x-button>
            </div>
        </div>
    </form>
</x-company-layout>
