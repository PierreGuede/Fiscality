<?php

namespace App\Http\Livewire\Cabinet;

use App\Fiscality\Companies\Company;
use App\Fiscality\CompanyAccesControl\Repositories\CompanyAccesControlRepository;
use LivewireUI\Modal\ModalComponent;

class ConfirmCompanyAcces extends ModalComponent
{
    public Company $company;
//    public CompanyAccesControlRepository $companyAccesControlRepository;

    public $company_name;

    public bool $activate_button = false;

    public function mount(Company $company)
    {

        $this->fill([
            'company' => $company,
            'company_name' => '',
        ]);
    }

    public function render()
    {
        return view('livewire.cabinet.confirm-company-acces');
    }

    public function updatedCompanyName($value)
    {
        if (strcmp($this->company_name, $this->company->name) == 0) {
            $this->activate_button = true;
        }
    }

        public function confirmAcces()
    {
        $companyAccesControlRepository = new CompanyAccesControlRepository();

        notify()->success('Bienvenue dans votre espace de travail');
        if (strcmp($this->company_name, $this->company->name) == 0) {
                $companyAccesControlRepository->disconected();
            $companyAccesControlRepository->connected($this->company->id);
            return redirect()->route('tax-result', [$this->company->id]);

        }
    }
}
