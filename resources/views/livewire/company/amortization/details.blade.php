<div>
    <x-total-card :total="$total" />

    @livewire('company.amortization.vehicle-card', ['company' => $company])
    @livewire('company.amortization.excess-card', ['company' => $company])
    @livewire('company.amortization.depreciation-card', ['company' => $company])
</div>
