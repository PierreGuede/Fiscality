<div>
    <x-total-card :total="$max_value" />
    @livewire('corporate-tax.real-tax-card', ['total' => $data['impot_reel']])
    @livewire('corporate-tax.minimum-tax-card', ['company' => $company])
    @livewire('corporate-tax.minimum-tax-rate-card', ['total' => $data['impot_minimum_forfetaire']])
</div>
