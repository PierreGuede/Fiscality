<x-guest-layout>
    <div class=" w-10/12 mx-auto p-4">
        <div class="step-2">
            <section class=" mt-6 w-full p-4 h-full items-center">
                <div class="grid gap-4 grid-cols-3 grid-rows-2">
                    <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">
                        <a href="{{ route('work.accountResult',$company->id) }}" class="p-2 "> Faire mon Resultat comptable </a>
                    </div>
                    <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">
                        <a href="{{ route('work.impotcalcul',$company->id) }}" class="p-2 "> Calculer les impots </a>
                    </div>
                    <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">
                        <p class="p-2 "> Faire mon Resultat Fiscal </p>
                    </div>
                    <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">
                        <a href="{{ route('work.amortization',$company->id) }}" class="p-2 "> Calculer mes amortissements </a>
                    </div>
                    <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">
                        <a href="{{ route('work.accuredCharge',$company->id) }}" class="p-2 "> Calculer les Provision et charges  provisionnelles </a>
                    </div>
                    <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">
                        <p class="p-2 "> Voir les Autres réintégration </p>
                    </div>
                </div>
            </section>
        </div>
    </div>

</x-guest-layout>
