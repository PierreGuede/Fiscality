<x-company-layout :company="$company"  >
        <h1 class="text-xl font-semibold text-gray-700 ">Résultat comptable</h1>

        @livewire('account-result.details-account-result', ['company' => $company])
</x-company-layout>
