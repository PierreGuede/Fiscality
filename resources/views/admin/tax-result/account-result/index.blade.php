<x-company-layout :company="$company"  >
    <x-tax-result.content-wrapper :company="$company" >

        <x-title>Résultat comptable</x-title>

        @livewire('account-result.details-account-result', ['company' => $company])
        </x-tax-result.content-wrapper>

</x-company-layout>
