<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\Companies\Company;
use App\Models\DonationGiftDetail;
use App\Models\DonationGrantContribution;
use App\Models\GuruDonationsGift;
use App\Models\GuruStateDonationDetail;
use App\Models\StateDonationDetail;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class DetailDonationGrantContributions extends Component
{
    public bool  $open_a_side = false;

    public string  $response = 'no';

    public $company;

    public $donation_grant_contribution;

    public $state_donation_detail;

    public $donation_gift_detail;

    public $state_donation;

    public $donation_gifts;

    public $state_donation_inputs;

    public $state_donation_data;

    public $donation_gift;

    public $donation_gifts_inputs;

    public $turnover;

    public $thousandth_turnover;

    public $total_state_donation;

    public $surplus_state_donation;

    public $total_donation_gift;

    public $surplus_state;

    protected $listeners = ['openASide', 'closeASide'];

    public function mount(Company $company)
    {
        $this->company = $company;
        $this->state_donation = GuruStateDonationDetail::all();
        $this->donation_gifts = GuruDonationsGift::all();

        $this->donation_grant_contribution = DonationGrantContribution::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->state_donation_detail = StateDonationDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();
        $this->donation_gift_detail = DonationGiftDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();

        $this->fill([
            'state_donation_inputs' => collect($this->state_donation_detail),
            'state_donation_data' => $this->reformViewFormData(collect($this->state_donation_detail)),
            'donation_gifts_inputs' => collect($this->donation_gift_detail),
            'donation_gift' => $this->reformViewFormData(collect($this->donation_gift_detail)),
            'turnover' => $this->donation_grant_contribution?->turnover,
            'limit' => $this->donation_grant_contribution?->limit,
            'thousandth_turnover' => $this->donation_grant_contribution?->thousandth_turnover,
            'total_state_donation' => $this->donation_grant_contribution?->total_state_donation,
            'surplus_state_donation' => $this->donation_grant_contribution?->surplus_state_donation,
            'total_donation_gift' => $this->donation_grant_contribution?->total_donation_gift,
            'surplus_state' => $this->donation_grant_contribution?->surplus_state,
        ]);
    }

    public function render()
    {
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.detail-donation-grant-contributions');
    }

    public function openASide()
    {
        $this->open_a_side = true;
    }

    public function closeASide()
    {
        $this->open_a_side = false;
    }

    private function reformViewFormData(Collection $data)
    {
        for ($i = 0; $i < count($data); $i++) {
            $data[$i] = $data[$i]['amount'];
        }

        return $data;
    }
}
