<x-company-layout :company="$company" >
    <div class="w-full flex flex-col justify-center ">
        <div class=" w-auto" >
            <h2 class="text-2xl font-semibold text-gray-700 py-4" >Amortissement</h2>
            @livewire('total-card', ['total' => $total])
            @livewire('company.amortization.vehicle-card', ['company' => $company])
            @livewire('company.amortization.excess-card', ['company' => $company])
            @livewire('company.amortization.depreciation-card', ['company' => $company])
        </div>

    </div>


</x-company-layout>
