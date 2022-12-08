<x-company-layout :company="$company">
    <x-notifications position="top-right" />

    <x-company-setting.content-wrapper :company="$company">
        @livewire('tax-rates-setting', ['company' => $company])
    </x-company-setting.content-wrapper>

</x-company-layout>
