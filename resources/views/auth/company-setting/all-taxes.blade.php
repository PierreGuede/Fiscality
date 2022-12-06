<x-company-layout :company="$company">

    <x-company-setting.content-wrapper :company="$company">
        <div class="py-4">
            <p class="text-xl text-slate-700 font-semibold py-4">Amortissement</p>
            <div class="ml-4">
                <div class="ml-4">
                    <p class="text-md text-slate-700 font-semibold"> Vehicule de tourisme</p>
                    <div class="ml-4">
                        <p class="text-sm">
                            Plafond base d'amortissement (25.000.000 XOF)
                        </p>
                    </div>
                </div>

                <div class="ml-4">
                    <p class="text-md text-slate-700 font-semibold"> surplus d'amortissement</p>
                    <div class="ml-4">
                        <p class="text-sm">
                            Taux d'armortissement à utilisé (%)
                        </p>
                        <p class="text-sm">
                            Taux d'armortissement recommandé (%)
                        </p>
                    </div>
                </div>


            </div>
        </div>
        <div class="py-4">
            <p class="text-xl text-slate-700 font-semibold py-4">Autres réintégration</p>
            <div class="ml-4">
                <div class="ml-4 py-2">
                    <p class="text-md text-slate-700 font-semibold"> frais financiers</p>
                    <div class="ml-4">
                        <p class="text-sm">
                            Taux d'intérêt de la BCEAO de l'année ( 4%)
                        </p>

                        <p class="text-sm">
                            Taux maximum ( 3%)
                        </p>
                        <p class="text-sm">
                            taux du pafond de déductibilité ( 30%)
                        </p>
                    </div>
                </div>
                <div class="ml-4 py-2">
                    <p class="text-md text-slate-700 font-semibold"> commission sur achat</p>
                    <div class="ml-4">
                        <p class="text-sm">
                            Taux de limite de deduction ( 5%)
                        </p>
                    </div>
                </div>
                <div class="ml-4 py-2">
                    <p class="text-md text-slate-700 font-semibold">Redevances</p>
                    <div class="ml-4">
                        <p class="text-sm">
                            Taux de limite de deduction ( 5%)
                        </p>
                    </div>
                </div>
                <div class="ml-4 py-2">
                    <p class="text-md text-slate-700 font-semibold">Frais d'assistance technique comptable et financière</p>
                    <div class="ml-4">
                        <p class="text-sm">
                            Taux de limite de deduction ( 5%)
                        </p>
                    </div>
                </div>
                <div class="ml-4 py-2">
                    <p class="text-md text-slate-700 font-semibold">Dons à l'état</p>
                    <div class="ml-4">
                        <p class="text-sm">
                            Limite ( 25 000 000 XOF)
                        </p>
                        <p class="text-sm">
                            Taux du millième du chiffre d'affaire ( 0.1%)
                        </p>
                    </div>
                </div>
                <div class="ml-4 py-2">
                    <p class="text-md text-slate-700 font-semibold">Cadeaux à caractère publicitaire</p>
                    <div class="ml-4">
                        <p class="text-sm">
                            Taux de limite de deduction ( 0.3%)
                        </p>
                    </div>
                </div>
                <div class="ml-4 py-2">
                    <p class="text-md text-slate-700 font-semibold">Surplus de loyer véhicule (par jours)</p>
                    <div class="ml-4">
                        <p class="text-sm">
                            Limite de deduction applicable( 365jours)
                        </p>
                        <p class="text-sm">
                            Limite de deduction annuelle( 6 250 000 XOF)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4">
            <p class="text-xl text-slate-700 font-semibold py-4">Déductions</p>
            <div class="ml-4 py-2">
                <p class="text-md text-slate-700 font-semibold"> Produits financier</p>
                <div class="ml-4">
                    <p class="text-sm">
                        Taux des produits des titres émis par l'Etat Béninois, les collectivités publiques béninoises et leurs démembrements (%)
                    </p>
                    <p class="text-sm">
                        Taux des autres produits RCM (%)
                    </p>
                </div>
            </div>
        </div>
    </x-company-setting.content-wrapper>

</x-company-layout>
