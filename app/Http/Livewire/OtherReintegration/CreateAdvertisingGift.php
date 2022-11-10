<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\AdvertisingGiftDetails\AdvertisingGiftDetail;
use App\Fiscality\AdvertisingGifts\AdvertisingGift;
use App\Fiscality\Companies\Company;
use App\Fiscality\GeneralCosts\GeneralCost;
use Illuminate\Support\Collection;
use Livewire\Component;

class CreateAdvertisingGift extends Component
{
    public bool  $open_a_side = false;

    public Company $company;

    public $inputs;
    public $turnover;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        //        'inputs.*.account' => 'required|distinct|integer',
        'inputs.*.name' => 'required',
        'inputs.*.amount' => 'required',
        'turnover' => 'required|min:1',
        'deduction_limit' => 'required|min:1',
        'surplus_reintegrated' => 'required|min:1',
    ];

    protected $messages = [
        //        'inputs.*.account.required' => 'champ obligatoire',
        //        'inputs.*.account.distinct' => 'incohérent',
        'inputs.*.name.required' => 'champ obligatoire',
        'inputs.*.amount' => 'champ obligatoire',
        'turnover' => 'champ obligatoire',
        'deduction_limit' => 'champ obligatoire',
        'surplus_reintegrated' => 'champ obligatoire',
    ];

    public function add(): void
    {
        $this->inputs->push(['name' => '', 'amount' => '']);
    }

    public function remove($key): void
    {
        $this->inputs->pull($key);
    }

    public function mount(Company $company)
    {
        $this->currentStep = 1;
        $this->company = $company;
        $this->fill([
            'inputs' => collect([]),
        ]);
    }

    public function render()
    {
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.create-advertising-gift');
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
        $limit_deduction = (float)$this->turnover * (3/1000);
        $surplus_reintegrated = (float)$total_amount - $limit_deduction;

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
                'name'=> $this->inputs[$i]['name'],
                'amount'=>$this->inputs[$i]['amount'],
            ]);
        }

        $this->closeASide();
    }
}
