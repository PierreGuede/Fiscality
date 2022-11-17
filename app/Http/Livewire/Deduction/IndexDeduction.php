<?php

namespace App\Http\Livewire\Deduction;

use App\Fiscality\Companies\Company;
use App\Models\Deduction;
use Carbon\Carbon;
use Livewire\Component;

class IndexDeduction extends Component
{
    const CREATE = 'CREATE';

    const EDIT = 'EDIT';

    const READ = 'READ';

    public $state = self::CREATE;

    public Company $company;

    public $deduction;

    public $total_financial_product;

    public $reversals_provisions;

    public $capital_gain;

    public $currency_transaction_change;

    public $listeners = ['refreshState'];

    public function mount(Company $company)
    {
        $this->company = $company;
        $this->deduction = Deduction::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->fill([
            'state' => is_null($this->deduction) ? self::CREATE : self::READ,
        ]);
    }

    public function render()
    {
        return view('livewire.deduction.index-deduction');
    }

    public function refreshState()
    {
        $this->state = self::READ;
    }

    public function changeState()
    {
        $this->state = $this->state == self::EDIT ? self::READ : self::EDIT;
    }
}
