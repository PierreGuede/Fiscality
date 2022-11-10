<x-company-layout :company="$company" >
    <h1 class="text-xl font-semibold text-gray-700 ml-4">LES PROVISIONS ET CHARGES PROVISIONNEES {{ $company->name }}</h1>
     @livewire('other-reintegration.details', ['company' => $company])

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
