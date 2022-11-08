<x-company-layout :company="$company" >
        <h1 class="text-xl font-semibold text-gray-700 ">Resultat comptable</h1>
{{--        <livewire:accounting-result-livewire :company="$company"/>--}}
    @livewire('accounting-result-livewire', [ 'company' => $company])
</x-company-layout>
