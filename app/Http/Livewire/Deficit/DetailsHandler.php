<?php

namespace App\Http\Livewire\Deficit;

use App\Fiscality\Companies\Company;
use App\Models\Deficit;
use Carbon\Carbon;
use Livewire\Component;

class DetailsHandler extends Component
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
        return view('livewire.deficit.details-handler');
    }

    public function save()
    {
        Deficit::create([
            'amount' => $this->amount,
            'user_id' => auth()->user()->id,
            'company_id' => $this->company->id,
        ]);

        $this->emit('changeToRead');
//        $this->emit('editt');
    }

    public function changeToRead()
    {
        $this->emit('edit');
    }
}
