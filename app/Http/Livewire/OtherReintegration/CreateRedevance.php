<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\Companies\Company;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use App\Fiscality\RADetails\RADetail;
use App\Fiscality\RedevanceDetails\RedevanceDetail;
use App\Fiscality\Redevances\Redevance;
use App\Models\GuruRedevance;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use WireUi\Traits\Actions;

class CreateRedevance extends Component
{
    use Actions;

    public bool  $open_a_side = false;

    public string  $response = 'no';

    public Company $company;

    public $guru_redevance;

    public $inputs;

    public $total_amount;

    public $turnover;

    public $deduction_limit;

    public $amount_reintegrated;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'inputs.*.account' => 'required|distinct|integer',
        'inputs.*.designation' => 'required',
        'inputs.*.amount' => 'required',
        'turnover' => 'required',
    ];

    protected $messages = [
        'inputs.*.account.required' => 'champ obligatoire',
        'inputs.*.account.distinct' => 'incohérent',
        'inputs.*.designation.required' => 'champ obligatoire',
        'inputs.*.amount' => 'champ obligatoire',
        'turnover' => 'champ obligatoire',
    ];

    public function add(): void
    {
        $this->inputs->push(['account' => 0, 'designation' => '', 'amount' => 0]);
    }

    public function remove($key): void
    {
        $this->inputs->pull($key);
    }

    public function mount(Company $company)
    {
//        $this->add();
        $income = RADetail::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->whereAccount(70)->first();

        $this->currentStep = 1;
        $this->company = $company;
        $this->guru_redevance = GuruRedevance::all();
        $this->inputs = collect($this->guru_redevance);
        $this->add();
        $this->fill([
            'turnover' => $income?->amount
        ]);
    }

    public function render()
    {
        return view('livewire.other-reintegration.create-redevance');
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
        $this->validate();

        $total_amount = array_sum(array_column($this->inputs->toArray(), 'amount'));
        $amount_reintegrate = (float) $total_amount - ((float) $this->turnover * 0.05);

        try {
            DB::beginTransaction();

            $redevance = Redevance::create([
                'Account' => 0,
                'designation' => 0,
                'amount' => $total_amount,
                'turnover' => (float) $this->turnover,
                'total_renumeration' => array_sum(array_column($this->inputs->toArray(), 'account')),
                'deduction_limit' => (float) $this->turnover * 0.05,
                'amount_reintegrated' => $amount_reintegrate > 0 ? $amount_reintegrate : 0,
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
            $this->notification()->success('Succès', 'Opération effectuée avec succès!');

            DB::commit();

            $this->closeASide();
        } catch(\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
