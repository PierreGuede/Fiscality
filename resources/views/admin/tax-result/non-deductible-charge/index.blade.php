<x-company-layout :company="$company" >
{{--    <h1 class="text-xl font-semibold text-gray-700 ml-4">LES PROVISIONS ET CHARGES PROVISIONNEES {{ $company->name }}</h1>--}}
    @livewire('other-reintegration.create-other-reintegration', ['company' => $company])

</x-company-layout>
