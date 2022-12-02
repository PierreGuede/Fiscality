

<x-company-layout :company="$company" >

    <x-taxes.content-wrapper :company="$company" >

{{--        <h5 class="text-2xl  font-semibold text-blue-900">Impôt sur les sociétés</h5>--}}

        @livewire('corporate-tax.details', [ 'company' => $company])

    </x-taxes.content-wrapper>

</x-company-layout>
