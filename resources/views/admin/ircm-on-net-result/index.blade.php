

<x-company-layout :company="$company" >
    <x-taxes.content-wrapper :company="$company" >
{{--        <x-title>IRCM sur résultat net</x-title>--}}
        @livewire('total-card', ['total' => $total])
    </x-taxes.content-wrapper>
</x-company-layout>
