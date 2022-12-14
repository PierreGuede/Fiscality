<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\CommissionOnPurchaseDetails\CommissionOnPurchaseDetail;
use App\Fiscality\CommissionOnPurchases\CommissionOnPurchase;
use App\Http\Livewire\OtherReintegrationSettingHandler;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EditCommissionOnPurchases extends Component
{
    public bool  $open_a_side = false;

    public $redevances;

    public $commission_on_purchase;

    public $company;

    public $inputs;

    public $total_limit;

    public $total_deduction;

    public $rate = 4;

    public $arrayLimit;

    public $arrayCommission;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'inputs.*.account' => 'required|distinct|integer',
        'inputs.*.name' => 'required',
        'inputs.*.amount' => 'required',
    ];

    protected $messages = [
        'inputs.*.account.required' => 'champ obligatoire',
        'inputs.*.account.distinct' => 'incohérent',
        'inputs.*.name.required' => 'champ obligatoire',
        'inputs.*.amount' => 'champ obligatoire',

    ];

    public function add(): void
    {
        $this->inputs->push(['Account' => 0, 'designation' => '', 'total' => 0, 'amount_commission' => 0, 'limit' => 0, 'no_deductible_amount' => 0]);
    }

    public function remove($key): void
    {
        $this->inputs->pull($key);
    }

    public function mount($company)
    {
        $otherReintegrationSettingHandler =  OtherReintegrationSettingHandler::getValue($company->id);
        $this->rate = (float)$otherReintegrationSettingHandler->commission_on_purchase_deduction_limit;

        $this->redevances = [];
        $this->currentStep = 1;
        $commission_on_purchase_detail = CommissionOnPurchaseDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();

        $this->fill([
            'inputs' => collect($commission_on_purchase_detail),
            'arrayLimit' => array_column($commission_on_purchase_detail->toArray(), 'total'),
            'arrayCommission' => array_column($commission_on_purchase_detail->toArray(), 'amount_commission'),
        ]);
    }

    public function render()
    {
        $this->redevances = [];
        $this->commission_on_purchase = [];

        return view('livewire.other-reintegration.edit-commission-on-purchases');
    }

    public function reformDataForView(Collection $data, string $field): array
    {
        $res = [];

        for ($i = 0; $i < count($data); $i++) {
            $res[] = $data[$i][$field];
        }

        return $res;
    }

    public function openASide()
    {
        $this->open_a_side = true;
    }

    public function closeASide()
    {
        $this->open_a_side = false;
    }

    public function store()
    {
        $total = [];
        foreach ($this->inputs as $value) {
            array_push($total, $value['total']);
        }
        $total_sum = array_sum($total);

        $commission_create = CommissionOnPurchase::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        try {
            DB::beginTransaction();

            $commission_create->fill([
                'renseigned_commission' => $total_sum,

            ]);
            $commission_create->save();

            foreach ($this->inputs as $value) {
                $this->total_limit = $value['total'] * 0.05;
                $this->total_deduction = $value['amount_commission'] - $this->total_limit;

                CommissionOnPurchaseDetail::updateOrCreate(
                    ['Account' => $value['Account']],
                    [
                        'designation' => $value['designation'],
                        'total' => $value['total'],
                        'amount_commission' => $value['amount_commission'],
                        'limit' => $this->total_limit,
                        'no_deductible_amount' => $this->total_deduction,
                        'commission_on_purchase_id' => $commission_create->id,
                        'company_id' => $this->company->id,
                    ]);
            }

            \DB::commit();
            $this->emit('refresh');
            $this->closeASide();
        } catch (\Throwable $th) {
            \DB::rollBack();
            throw $th;
        }
    }
}
