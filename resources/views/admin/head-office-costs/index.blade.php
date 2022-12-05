<x-company-layout :company="$company" >
    <div class="w-full flex flex-col justify-center ">

        <div class=" w-2/5 " >
            <x-title>Frais de siège</x-title>

            @livewire('head-office-cost.index-head-office-cost', ['company' => $company])
        </div>

    </div>


</x-company-layout>
