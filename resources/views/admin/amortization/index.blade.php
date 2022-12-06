<x-company-layout :company="$company" >
    <x-tax-result.content-wrapper :company="$company" >

    <div class="w-full flex flex-col justify-center ">
        <div class=" w-auto" >
            <x-title>Amortissement</x-title>

{{--            @livewire('company.amortization.details', ['company' => $company])--}}

            <x-total-card :total="$total" />
            @livewire('company.amortization.vehicle-card', ['company' => $company])
            @livewire('company.amortization.excess-card', ['company' => $company])
            @livewire('company.amortization.depreciation-card', ['company' => $company])
        </div>

    </div>
        </x-tax-result.content-wrapper>


</x-company-layout>
