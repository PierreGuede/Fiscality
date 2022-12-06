<?php

namespace App\Http\Livewire\Deficit;

use App\Fiscality\Companies\Company;
use App\Models\Deficit;
use Livewire\Component;

class CreateHandler extends Component
{
    public Company $company;

    public $amount;

    protected $rules = [
        'amount' => ['required', 'min:0'],
    ];

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.deficit.create-handler');
    }

    public function save()
    {
        Deficit::create([
            'amount' => $this->amount,
            'user_id' => auth()->user()->id,
            'company_id' => $this->company->id,
        ]);

        $this->emit('changeToRead');
    }
}
