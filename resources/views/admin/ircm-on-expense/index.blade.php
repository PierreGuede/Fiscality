

<x-company-layout :company="$company" >
    <x-taxes.content-wrapper :company="$company" >

        @livewire('ircm-on-expense.handler', ['company' => $company ])

    </x-taxes.content-wrapper>
</x-company-layout>
