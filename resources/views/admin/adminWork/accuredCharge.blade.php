    <x-company-layout :company="$company" >
        <x-tax-result.content-wrapper :company="$company" >

            <x-title>Provisions et charges non provisionnées</x-title>

            <div class="space-y-2">

                <x-total-card :total="$total" />

                @livewire('accured-charge.provision-card',['company' => $company])
            @livewire('accured-charge.expense-provisioned-card',['company' => $company])
            @livewire('create-provisions-personnel-expenses',['company' => $company])



        </div>
            </x-tax-result.content-wrapper>

</x-company-layout>
