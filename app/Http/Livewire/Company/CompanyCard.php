<?php

namespace App\Http\Livewire\Company;

use App\Fiscality\Companies\Company;
use Livewire\Component;

class CompanyCard extends Component
{
    public Company $company;

    public $typed_social_reason;

    public $listeners = ['save'];

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.company.company-card');
    }

    public function save($params)
    {
        dump($params);
    }
}
