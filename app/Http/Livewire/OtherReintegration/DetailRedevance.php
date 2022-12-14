<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\Companies\Company;
use App\Fiscality\RedevanceDetails\RedevanceDetail;
use App\Fiscality\Redevances\Redevance;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class DetailRedevance extends Component
{
    public bool  $open_a_side = false;

    public string  $response = 'no';

    public Company $company;

    public $redevance_details;

    public $redevance;

    public $inputs;

    public $total_amount;

    public $turnover;

    public $deduction_limit;

    public $amount_reintegrated;

    public $arr_sum;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'inputs.*.account' => 'required|distinct|integer',
        'inputs.*.name' => 'required',
        'inputs.*.amount' => 'required',
        'turnover' => 'required',
        'deduction_limit' => 'required',
        'amount_reintegrated' => 'required',
        'total_amount' => 'required',

    ];

    protected $messages = [
        'inputs.*.account.required' => 'champ obligatoire',
        'inputs.*.account.distinct' => 'incohérent',
        'inputs.*.name.required' => 'champ obligatoire',
        'inputs.*.amount' => 'champ obligatoire',

    ];

    public function add(): void
    {
//        $this->inputs->push( ['Account' => 0 , 'designation' => '', 'amount' => 0, 'turnover' => 0, 'deduction_limit' => 0, 'amount_reintegrated' => 0 ]);

        $this->inputs->push(['account' => 0, 'designation' => '', 'amount' => 0]);
    }

    public function remove($key): void
    {
        $this->inputs->pull($key);
    }

    public function mount(Company $company)
    {
        $this->company = $company;

        $this->redevance_details = RedevanceDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();
        $this->redevance = Redevance::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->reformInputsDataForArraySum($this->redevance_details);
        $this->fill([
            'inputs' => collect($this->redevance_details),
            'amount' => is_null($this->redevance?->amount) ? 0 : $this->redevance?->amount,
            'turnover' => is_null($this->redevance?->turnover) ? 0 : (float) $this->redevance->turnover,
            'deduction_limit' => is_null($this->redevance?->turnover) ? 0 : (float) $this->redevance->turnover * 0.05,
            'amount_reintegrated' => is_null($this->redevance?->amount_reintegrated) ? 0 : $this->redevance?->amount_reintegrated,
        ]);
    }

    public function render()
    {
//        $this->guru_redevance = [];

        return view('livewire.other-reintegration.detail-redevance');
    }

    public function reformInputsDataForArraySum(Collection $data)
    {
        for ($i = 0; $i < count($data); $i++) {
            $this->arr_sum[$i] = $data[$i]['amount'];
        }
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
            $income_total_amount += (float) $data[$i]['account'];
        }

        return $income_total_amount;
    }

    public function save()
    {
        $total_amount = (float) $this->processDataTotalAmount($this->inputs);
        $amount_reintegrate = (float) $total_amount - ((float) $this->turnover * 0.05);

        $redevance = Redevance::create([
            'Account' => 0,
            'designation' => 0,
            'amount' => $total_amount,
            'turnover' => (float) $this->turnover,
            'deduction_limit' => (float) $this->turnover * 0.05,
            'amount_reintegrated' => $amount_reintegrate,
            'company_id' => $this->company->id,
        ]);

        for ($i = 0; $i < count($this->inputs); $i++) {
            RedevanceDetail::create([
                'account' => $this->inputs[$i]['account'],
                'designation' => $this->inputs[$i]['designation'],
                'amount' => $this->inputs[$i]['amount'],
                'redevance_id' => $redevance->id,
                'company_id' => $this->company->id,
            ]);
        }

        $this->emit('refresh');

        notify()->success('Redevances créées avec succès!');
        $this->closeASide();
    }
}
