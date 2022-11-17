    <x-company-layout :company="$company" >
{{--    <div class=" w-10/12 mx-auto p-4">--}}
        <h1 class="text-xl font-semibold text-gray-700 ">LES PROVISIONS ET CHARGES PROVISIONNEES </h1>
        <div class="space-y-2">
{{--            <div--}}
{{--                class="p-2 text-center transition duration-200 rounded-md cursor-pointer bg-slated-500 hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1">--}}
{{--                <a href="{{ route('work.provision',$company->id) }}" class="p-2 text-white">Faire les provisions pour risque d'exploitation</a>--}}
{{--            </div>--}}
            @livewire('total-card', ['total' => $total])

            @livewire('accured-charge.provision-card',['company' => $company])
            @livewire('accured-charge.expense-provisioned-card',['company' => $company])
            @livewire('accured-charge.personnal-provision',['company' => $company])


{{--            <div--}}
{{--                class="p-2 text-center transition duration-200 rounded-md cursor-pointer bg-slated-500 hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1">--}}
{{--                <a href="{{ route('work.expenseProvisioned',$company->id) }}" class="p-2 text-white">Charges provisionnées</a>--}}
{{--            </div>--}}
        </div>
{{--    </div>--}}
</x-company-layout>
