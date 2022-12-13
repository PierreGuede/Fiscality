<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\AdvertisingGiftDetails\AdvertisingGiftDetail;
use App\Fiscality\AdvertisingGifts\AdvertisingGift;
use App\Fiscality\Companies\Company;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class DetailAdvertisingGift extends Component
{
    public bool  $open_a_side = false;

    public Company $company;

    public $inputs;

    public $turnover;

    public float $total_amount = 0;

    public $surplus_reintegrated;

    public $deduction_limit;

    protected $listeners = ['openASide', 'closeASide'];

    public function mount(Company $company)
    {
        $this->currentStep = 1;
        $this->company = $company;
        $advertising_gift_detail = AdvertisingGiftDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();
        $advertising_gift = AdvertisingGift::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->fill([
            'inputs' => collect($advertising_gift_detail),
            'turnover' => is_null($advertising_gift?->turnover) ? 0 : $advertising_gift->turnover,
            'total_amount' => is_null($advertising_gift?->total_amount) ? 0 : $advertising_gift->total_amount,
            'surplus_reintegrated' => is_null($advertising_gift?->surplus_reintegrated) ? 0 : $advertising_gift->surplus_reintegrated,
            'deduction_limit' => is_null($advertising_gift?->deduction_limit) ? 0 : $advertising_gift->deduction_limit,
        ]);
    }

    public function render()
    {
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.detail-advertising-gift');
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
        $total_amount = $this->processDataTotalAmount($this->inputs);
        $limit_deduction = (float) $this->turnover * (3 / 1000);
        $surplus_reintegrated = (float) $total_amount - $limit_deduction;

        $advertising_gift = AdvertisingGift::create([
            'total_amount' => $total_amount,
            'turnover' => $this->turnover,
            'surplus_reintegrated' => $surplus_reintegrated,
            'deduction_limit' => $limit_deduction,
            'company_id' => $this->company->id,
        ]);

        for ($i = 0; $i < count($this->inputs); $i++) {
            AdvertisingGiftDetail::create([
                'advertising_gift_id' => $advertising_gift->id,
                'company_id' => $this->company->id,
                'name' => $this->inputs[$i]['name'],
                'amount' => $this->inputs[$i]['amount'],
            ]);
        }

        $this->closeASide();
    }
}
