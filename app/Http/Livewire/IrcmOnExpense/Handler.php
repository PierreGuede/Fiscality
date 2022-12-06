<?php

namespace App\Http\Livewire\IrcmOnExpense;

use App\Fiscality\Companies\Company;
use App\Models\IRCMOnExpenseDetail;
use Carbon\Carbon;
use Livewire\Component;

class Handler extends Component
{
    public const READ = 'READ';

    public const EDIT = 'EDIT';

    public const CREATE = 'CREATE';

    public $state;

    public $total;

    public Company $company;

    public $ircm_on_expense_detail;

    public $data = [];

    public $listeners = ['refresh'];

    public function mount($company)
    {
        $this->company = $company;
        $this->state = self::READ;

        $this->refresh();
    }

    public function render()
    {
        return view('livewire.ircm-on-expense.handler');
    }

    public function edit()
    {
        $this->state = self::EDIT;
    }

    public function refresh()
    {
        $ircm_on_expense_detail = IRCMOnExpenseDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();

        $total = 0;
        $this->state = self::CREATE;
        if (count($ircm_on_expense_detail) > 0) {
            $total = array_sum(array_column($ircm_on_expense_detail->toArray(), 'amount'));

            for ($i = 0; $i < count($ircm_on_expense_detail); $i++) {
                $this->data[$ircm_on_expense_detail[$i]['field']] = (float) $ircm_on_expense_detail[$i]['amount'];
            }
            $this->state = self::READ;
        }

        $this->total = $total * (15 / 100);
        $this->ircm_on_expense_detail = $ircm_on_expense_detail;
    }
}
