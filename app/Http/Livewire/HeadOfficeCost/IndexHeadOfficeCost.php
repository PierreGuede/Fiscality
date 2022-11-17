<?php

namespace App\Http\Livewire\HeadOfficeCost;

use App\Fiscality\Companies\Company;
use App\Models\HeadOfficeCost;
use Carbon\Carbon;
use Livewire\Component;

class IndexHeadOfficeCost extends Component
{
    public Company $company;

    public string $state = 'CREATE';

    public $listeners = ['refreshState'];

    public function mount(Company $company)
    {
        $this->company = $company;

        $head_office_cost = HeadOfficeCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->state = is_null($head_office_cost) ? 'CREATE' : 'READ';
    }

    public function render()
    {
        return view('livewire.head-office-cost.index-head-office-cost');
    }

    public function refreshState()
    {
        $this->state = 'READ';
    }

    public function changeState()
    {
        $this->state = $this->state == 'UPDATE' ? 'READ' : 'UPDATE';
    }
}
