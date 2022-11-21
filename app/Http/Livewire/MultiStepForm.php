<?php

namespace App\Http\Livewire;

use App\Fiscality\Categories\Category;
use App\Fiscality\Companies\Company;
use App\Fiscality\Domains\Domain;
use App\Fiscality\PrincipalActivities\PrincipalActivity;
use App\Fiscality\TaxCenters\TaxCenter;
use App\Fiscality\TypeCompanies\TypeCompany;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class MultiStepForm extends Component
{
    use WithFileUploads, Actions;

    public $name;

    public $email;

    public $created_date;

    public $ifu;

    public $path;

    public $rccm;

    public $path_rccm;

    public $celphone;

    public $tax_center_id;

    public $type_company_id;

    // public $category_id=[];
    public $sub_category_id = [];

    public $domain_id;

    public $activity_id;

    public $totalSteps = 4;

    public $currentStep = 1;

    public $principalActivity = [];

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        $type = TypeCompany::all();
        $typeCat = Category::all();
        $domain = Domain::all();
        $taxCenter = TaxCenter::all();

        return view('livewire.multi-step-form', compact('type', 'typeCat', 'domain', 'taxCenter'));
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();

        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'domain_id' => ['required'],
                'activity_id' => ['required'],
            ], [
                'domain_id.required' => 'champ obligatoire',
                'activity_id.required' => 'champ obligatoire',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'tax_center_id' => ['required'],
                'type_company_id' => ['required'],
            ], [
                'tax_center_id' => 'champ obligatoire',
                'type_company_id' => 'champ obligatoire',
            ]);
        } elseif ($this->currentStep == 3) {
        }
    }

    public function findActivity()
    {
        if (! empty($this->domain_id)) {
            $this->principalActivity = PrincipalActivity::where('domain_id', $this->domain_id)->get();
        }
    }

    public function company()
    {
        $this->resetErrorBag();
        $this->validate([
            'name' => ['required', 'string', 'max:255', 'unique:companies'],
            'rccm' => ['required', 'string', 'max:14', 'unique:companies'],
            'path_rccm' => ['required', 'file', 'mimes:pdf', 'max:4000', 'unique:companies'],
            'created_date' => ['required', 'date'],
            'ifu' => ['required', 'integer', 'digits:13', 'unique:companies'],
            'path' => ['required', 'file', 'mimes:pdf', 'max:4000', 'unique:companies'],
            'email' => ['required', 'string', 'max:255', 'unique:companies'],
            'celphone' => ['required', 'max:255', 'unique:companies'],
        ]);
        $ifuFile = 'IFU_DU_'.time().'.'.$this->path->getClientOriginalName();
        $rccmFile = 'RCCM_DU_'.time().'.'.$this->path_rccm->getClientOriginalName();

        $IFURequest = $this->path->storeAs('IFU', $ifuFile, 'public');
        $RCCMRequest = $this->path_rccm->storeAs('RCCM', $rccmFile, 'public');

        $company = Company::create([
            'name' => $this->name,
            'rccm' => $this->rccm,
            'path_rccm' => $RCCMRequest,
            'created_date' => $this->created_date,
            'ifu' => $this->ifu,
            'path' => $IFURequest,
            'email' => $this->email,
            'celphone' => $this->celphone,
            'tax_center_id' => $this->tax_center_id,
            'type_company_id' => $this->type_company_id,
            'domain_id' => $this->domain_id,
            'user_id' => request()->user()->id,
        ]);

        foreach ($this->sub_category_id as $key => $value) {
            $company->detailType()->attach($value);
        }

        return redirect()->route('company.index');
    }
}
