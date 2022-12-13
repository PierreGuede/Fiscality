    <div>

    @livewire('amortization-setting-handler', [ $company])
    @livewire('other-reintegration-setting-handler', ['company' => $company])
    @livewire('deduction-setting-handler', ['company' => $company])
</div>
