

<x-company-layout :company="$company" >

    <x-taxes.content-wrapper :company="$company" >

        @livewire('corporate-tax.details', [ 'company' => $company])

    </x-taxes.content-wrapper>

</x-company-layout>
