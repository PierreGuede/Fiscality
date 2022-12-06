<x-company-layout :company="$company" >

    <x-tax-result.content-wrapper :company="$company" >

    <div class="w-full flex flex-col justify-center ">

        <div class=" space-y-2 " >
            <x-title>Frais de siège</x-title>

            @livewire('head-office-cost.index-head-office-cost', ['company' => $company])
        </div>

    </div>
        </x-tax-result.content-wrapper>


</x-company-layout>
