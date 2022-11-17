<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\Companies\Company;
use App\Models\DonationGiftDetail;
use App\Models\DonationGrantContribution;
use App\Models\GuruDonationsGift;
use App\Models\GuruStateDonationDetail;
use App\Models\StateDonationDetail;
use Illuminate\Support\Collection;
use Livewire\Component;

class CreateDonationGrantContributions extends Component
{
    public bool  $open_a_side = false;

    public string  $response = 'no';

    public $company;

    public $limit = 25_000_000;

    public $state_donation;

    public $donation_gifts;

    public $state_donation_inputs;

    public $donation_gifts_inputs;

    public $turnover;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'state_donation_inputs.*.name' => 'required',
        'state_donation_inputs.*.amount' => 'required',
        'donation_gifts_inputs.*.name' => 'required',
        'donation_gifts_inputs.*.amount' => 'required',
    ];

    protected $messages = [
        'state_donation_inputs.*.name.required' => 'champ obligatoire',
        'state_donation_inputs.*.amount' => 'champ obligatoire',
        'donation_gifts_inputs.*.name.required' => 'champ obligatoire',
        'donation_gifts_inputs.*.amount' => 'champ obligatoire',

    ];

    public function addToFirstInput(): void
    {
        $this->state_donation_inputs->push(['account' => 0, 'name' => '', 'amount' => '']);
    }

    public function removeFromFirstInput($key): void
    {
        $this->state_donation_inputs->pull($key);
    }

    public function addToSecondInput(): void
    {
        $this->donation_gifts_inputs->push(['account' => 0, 'name' => '', 'amount' => 0]);
    }

    public function removeFromSecondInput($key): void
    {
        $this->donation_gifts_inputs->pull($key);
    }

    public function mount(Company $company)
    {
        $this->state_donation = GuruStateDonationDetail::all();
        $this->donation_gifts = GuruDonationsGift::all();

        $this->company = $company;

        $this->fill([
            'state_donation_inputs' => collect($this->state_donation),
            'donation_gifts_inputs' => collect($this->donation_gifts),
        ]);
    }

    public function render()
    {
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.create-donation-grant-contributions');
    }

    public function openASide()
    {
        $this->open_a_side = true;
    }

    public function closeASide()
    {
        $this->open_a_side = false;
    }

    private function processDataTotalAmount(Collection $data): float
    {
        $income_total_amount = 0;
        for ($i = 0; $i < count($data); $i++) {
            $income_total_amount += (float) $data[$i]['amount'];
        }

        return $income_total_amount;
    }

    public function save()
    {
//        $this->beginTransaction();
//
//        try {

        $total_state_donation = $this->processDataTotalAmount($this->state_donation_inputs);
        $surplus_state_donation = $total_state_donation - $this->limit;
        $total_donation_gift = $this->processDataTotalAmount($this->donation_gifts_inputs);

        $donation_grant_contribution = DonationGrantContribution::create([
            'turnover' => (float) $this->turnover,
            'limit' => $this->limit,
            'thousandth_turnover' => (float) $this->turnover * (1 / 1000),
            'total_state_donation' => $total_state_donation,
            'surplus_state_donation' => $surplus_state_donation,
            'total_donation_gift' => $total_donation_gift,
            'surplus_state' => $total_donation_gift - $surplus_state_donation,
            'company_id' => $this->company->id,
        ]);

        for ($i = 0; $i < count($this->state_donation_inputs); $i++) {
            StateDonationDetail::create([
                'account' => $this->state_donation_inputs[$i]['account'],
                'name' => $this->state_donation_inputs[$i]['name'],
                'amount' => $this->state_donation_inputs[$i]['amount'],
                'donation_grant_contribution_id' => $donation_grant_contribution->id,
                'company_id' => $this->company->id,
            ]);
        }

        for ($i = 0; $i < count($this->donation_gifts_inputs); $i++) {
            DonationGiftDetail::create([
                'account' => $this->donation_gifts_inputs[$i]['account'],
                'name' => $this->donation_gifts_inputs[$i]['name'],
                'amount' => $this->donation_gifts_inputs[$i]['amount'],
                'donation_grant_contribution_id' => $donation_grant_contribution->id,
                'company_id' => $this->company->id,
            ]);
        }

        $this->emit('refresh');

//            $this->commit();
        $this->closeASide();
//        } catch (\Exception $e) {
//            $this->rollBack();

//            throw $e;
//        }
    }
}
