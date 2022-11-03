<x-company-layout>
    <div class="w-full flex flex-col justify-center ">

        <div class=" w-auto mx-auto" >

        @livewire('company.amortization.vehicle-card', ['company' => $company])
        @livewire('company.amortization.excess-card', ['company' => $company])
        @livewire('company.amortization.depreciation-card', ['company' => $company])
        </div>

    </div>


</x-company-layout>
