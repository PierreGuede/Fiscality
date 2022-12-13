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

class EditDonationGrantContributions extends Component
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

    public $limit;

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

        return view('livewire.other-reintegration.edit-donation-grant-contributions');
    }

    private function reformViewFormData(Collection $data)
    {
        for ($i = 0; $i < count($data); $i++) {
            $data[$i] = $data[$i]['amount'];
        }

        return $data;
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
        $total_state_donation = $this->processDataTotalAmount($this->state_donation_inputs);
        $surplus_state_donation = $total_state_donation - $this->limit;
        $total_donation_gift = $this->processDataTotalAmount($this->donation_gifts_inputs);

        $this->donation_grant_contribution->fill([
            'turnover' => (float) $this->turnover,
            'thousandth_turnover' => (float) $this->turnover * (1 / 1000),
            'total_state_donation' => $total_state_donation,
            'surplus_state_donation' => $surplus_state_donation,
            'total_donation_gift' => $total_donation_gift,
            'surplus_state' => $total_donation_gift - $surplus_state_donation,
        ]);

        $this->donation_grant_contribution->save();

        for ($i = 0; $i < count($this->state_donation_inputs); $i++) {
            StateDonationDetail::updateOrCreate(
                ['account' => $this->state_donation_inputs[$i]['account']],
                [
                    'name' => $this->state_donation_inputs[$i]['name'],
                    'amount' => $this->state_donation_inputs[$i]['amount'],
                    'donation_grant_contribution_id' => $this->donation_grant_contribution->id,
                    'company_id' => $this->company->id,
                ]);
        }

        for ($i = 0; $i < count($this->donation_gifts_inputs); $i++) {
            DonationGiftDetail::updateOrCreate(
                ['account' => $this->donation_gifts_inputs[$i]['account']],
                [
                    'name' => $this->donation_gifts_inputs[$i]['name'],
                    'amount' => $this->donation_gifts_inputs[$i]['amount'],
                    'donation_grant_contribution_id' => $this->donation_grant_contribution->id,
                    'company_id' => $this->company->id,
                ]);
        }

        $this->emit('refreshOtherReintegrationData');
        $this->closeASide();
    }
}
