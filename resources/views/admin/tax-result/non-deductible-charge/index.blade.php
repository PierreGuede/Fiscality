<x-company-layout :company="$company" >
{{--    <h1 class="text-xl font-semibold text-gray-700 ml-4">LES PROVISIONS ET CHARGES PROVISIONNEES {{ $company->name }}</h1>--}}
    <x-tax-result.content-wrapper :company="$company" >
        @livewire('other-reintegration.index-other-reintegration', ['company' => $company])
    </x-tax-result.content-wrapper >
</x-company-layout>
