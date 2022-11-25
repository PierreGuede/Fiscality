<x-company-layout :company="$company">


            <h5 class="text-2xl ml-12 font-semibold text-blue-900">Résultat Fiscal</h5>
    <div class="flex justify-between mt-12 mx-12 ">

        <div class=" max-w-md overscroll-y-auto ">
            <x-tree.item title="Résultat comptable" :total="$data['account_result']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item title="Amortissement" :total="$data['amortization']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item title="Provision et charges provisionnées" :total="$data['accured_charge']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item title="Frais financier" :total="$data['financial_cost']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item title="Commission sur achats" :total="$data['commission_on_purchase']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item title="Redevance" :total="$data['redevance']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item title="Frais d'assistance technique et fiancière"
                         :total="$data['accounting_financial_technical_assistance_cost']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item title="Dons, subventions et cotisations" :total="$data['donation_grant_contribution']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item title="Cadeaux publicitaire" :total="$data['advertising_gift']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item title="Surplus de loyer" :total="$data['excess_rent']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item title="Déduction" :total="$data['deduction']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
            <x-tree.item hideLink title="Autre réintegration" :total="$data['other_reintegration']"
                         description="La route commença à s’enfoncer. On ne voyait plus les grillages sur les cotés, mais juste des rochers. Et soudain, les voitures s’arrêtèrent devant une énorme porte en métal entourée de béton. "/>
        </div>

        <div class="max-w-md overflow-hidden fixed right-20 space-y-6 ">
                <div class=" w-full bg-white   p-6" >
                    <div class="flex justify-between text-gray-700 font-semibold text-md" >
                        <p>Résultat fiscal avant frais de sièges</p>
                    </div>
                    <p class="text-md line-clamp-3 font-semibold mt-6 text-slate-500" >
                        Total: {{ $total_tax_result_before_head_office_cost  }}
                    </p>
                </div>

            <div class=" w-full bg-white  p-6" >
                <div class="flex justify-between text-gray-700 font-semibold text-md" >
                    <p>Résultat fiscal avant déficit</p>
                </div>
                <p class="text-md line-clamp-3 font-semibold mt-6 text-slate-500" >
                    Total: {{ $total_tax_result_before_deficit_report  }}
                </p>
            </div>

            <div class=" w-full bg-white   p-6" >
                <div class="flex justify-between text-gray-700 font-semibold text-md" >
                    <p>Résultat fiscal</p>
                </div>
                <p class="text-md line-clamp-3 font-semibold mt-6 text-slate-500" >
                    Total: 0
                </p>
            </div>
        </div>
    </div>

</x-company-layout>
