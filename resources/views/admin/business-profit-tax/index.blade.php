

<x-company-layout :company="$company" >

    <x-taxes.content-wrapper :company="$company" >

        @livewire('business-profit-tax.details', [ 'company' => $company])

    </x-taxes.content-wrapper>

</x-company-layout>
