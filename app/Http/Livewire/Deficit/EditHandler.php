<?php

namespace App\Http\Livewire\Deficit;

use App\Fiscality\Companies\Company;
use App\Models\Deficit;
use Carbon\Carbon;
use Livewire\Component;

class EditHandler extends Component
{
    public Company $company;

    public $amount;

    protected $rules = [
        'amount' => ['required', 'min:0'],
    ];

    public function mount(Company $company)
    {
        $this->company = $company;
        $deficit = Deficit::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->fill([
            'amount' => $deficit->amount,
        ]);
    }

    public function render()
    {
        return view('livewire.deficit.edit-handler');
    }

    public function save()
    {
        $deficit = Deficit::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $deficit->fill([
            'amount' => $this->amount,
        ]);

        $deficit->save();

        $this->emit('changeToRead');
    }
}
