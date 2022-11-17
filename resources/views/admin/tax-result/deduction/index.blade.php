<x-company-layout :company="$company" >
    <h1 class="text-xl font-semibold text-gray-700 ml-4">LES DEDUCTION </h1>

    @livewire('deduction.index-deduction', ['company' => $company])
</x-company-layout>
