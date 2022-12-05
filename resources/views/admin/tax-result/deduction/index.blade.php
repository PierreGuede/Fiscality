<x-company-layout :company="$company" >
    <x-tax-result.content-wrapper :company="$company" >

        <x-title>Déductions</x-title>


        @livewire('deduction.index-deduction', ['company' => $company])
        </x-tax-result.content-wrapper>

</x-company-layout>
