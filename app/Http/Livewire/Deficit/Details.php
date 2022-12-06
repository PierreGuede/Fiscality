<?php

namespace App\Http\Livewire\Deficit;

use App\Models\Deficit;
use Carbon\Carbon;
use Livewire\Component;

class Details extends Component
{
    public const CREATE = 'CREATE';

    public const EDIT = 'EDIT';

    public const READ = 'READ';

    public string $state;

    public $company;

    public $deficit_amount;

    public $listeners = ['changeToRead', 'edit'];

    public function mount($company)
    {
        $this->company = $company;
        $this->deficit_amount = Deficit::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->state = $this->deficit_amount == null ? self::CREATE : self::READ;
    }

    public function render()
    {
        return view('livewire.deficit.details');
    }

    public function edit()
    {
        $this->state = self::EDIT;
    }

    public function changeToRead()
    {
        $this->state = self::READ;
    }
}
