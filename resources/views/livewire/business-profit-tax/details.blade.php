<div>

    @livewire('total-card', ['total' => $max_value])

    @livewire('business-profit-tax.real-tax-card', ['total' => $data['impot_reel']])
    @livewire('business-profit-tax.minimum-tax-card', ['company' => $company])
    @livewire('business-profit-tax.minimum-tax-rate-card', ['total' => $data['impot_minimum_forfetaire']])
</div>
