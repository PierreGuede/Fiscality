<?php

namespace App\Http\Livewire;

use App\Fiscality\Categories\Category;
use App\Fiscality\Companies\Company;
use App\Fiscality\Domains\Domain;
use App\Fiscality\PrincipalActivities\PrincipalActivity;
use App\Fiscality\TaxCenters\TaxCenter;
use App\Fiscality\TypeCompanies\TypeCompany;
use App\Fiscality\TypeImpots\TypeImpot;
use App\Models\DiscountType;
use App\Models\TypeCompanyTypeImpot;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class MultiStepForm extends Component
{
    use WithFileUploads, Actions;

    public const FIRST_STEP = 1;

    public const SECOND_STEP = 2;

    public const THRID_STEP = 3;

    public const FOUTH_STEP = 4;

    public $name;

    public $logo;

    public $email;

    public $created_date;

    public $ifu;

    public $path;

    public $rccm;

    public $path_rccm;

    public $celphone;

    public $tax_center_id;

    public $type_company_id;

    public $discount_type_id;

    // public $category_id=[];
    public $sub_category_id = [];

    public $domain_id;

    public $activity_id;

    public $totalSteps = 4;

    public $currentStep = 1;

    public $principalActivity = [];

    public function mount()
    {
//        $this->currentStep = 1;
        $this->fill([
            'currentStep' => self::FIRST_STEP,
        ]);
    }

    public function render()
    {
        $type = TypeCompany::all();
        $typeCat = Category::all();
        $domain = Domain::all();
        $taxCenter = TaxCenter::all();
        $discount_type=DiscountType::all();
        return view('livewire.multi-step-form', compact('type', 'typeCat', 'domain', 'taxCenter','discount_type'));
    }

    public function updatedIfu($value)
    {
        if (strlen($value) === 13) {
            $find_Ifu = Company::whereIfu($value)->first();
            if ($find_Ifu != null) {
                return $this->notification()->error(
                    $title = 'Erreur!!!',
                    $description = 'Le numero IFU existe déjà!'
                );
            }
        }
    }

    public function updatedEmail($value)
    {
        if (strstr($value, '@')) {
            $find_mail = Company::whereEmail($value)->first();
            if ($find_mail != null) {
                return $this->notification()->error(
                    $title = 'Erreur!!!',
                    $description = 'Ce mail a déjà été utilisé dans TECIT'
                );
            }
        }
    }

    public function updatedCreatedDate($value)
    {
        if ($value > now()) {
            return $this->notification()->error(
                $title = 'Erreur!!!',
                $description = "Vous ne pouvez pas choisir une date ultérieur a aujourd'hui"
            );
        }
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
        if ($this->currentStep < self::FIRST_STEP) {
            $this->currentStep = self::FIRST_STEP;
        }
    }

    public function validateData()
    {
        if ($this->currentStep == self::FIRST_STEP) {
            $this->validate([
                'domain_id' => ['required'],
                'activity_id' => ['required'],
            ], [
                'domain_id.required' => 'champ obligatoire',
                'activity_id.required' => 'champ obligatoire',
            ]);
        } elseif ($this->currentStep == self::SECOND_STEP) {
            $this->validate([
                'tax_center_id' => ['required'],
                'type_company_id' => ['required'],
                'discount_type_id' => ['required'],
            ], [
                'tax_center_id' => 'champ obligatoire',
                'type_company_id' => 'champ obligatoire',
                'discount_type_id' => 'champ obligatoire',
            ]);
        } elseif ($this->currentStep == self::THRID_STEP) {
        }
    }

    public function findActivity()
    {
        if (! empty($this->domain_id)) {
            $this->principalActivity = PrincipalActivity::whereDomainId($this->domain_id)->get();
        }
    }

    public function verifyData($wordInput)
    {
        dd($wordInput);
    }

    public function save()
    {
//        $this->validate([
//            'name' => ['required', 'string', 'max:255', 'unique:companies'],
//            'rccm' => ['required', 'string', 'max:14', 'unique:companies'],
//            'created_date' => ['required', 'date'],
//            'ifu' => ['required', 'integer', 'digits:13', 'unique:companies'],
//            'email' => ['required', 'string', 'max:255', 'unique:companies'],
//            'celphone' => ['required', 'max:255', 'unique:companies'],
//        ]);
        /*         $ifuFile = 'IFU_DU_'.time().'.'.$this->path->getClientOriginalName();
                $rccmFile = 'RCCM_DU_'.time().'.'.$this->path_rccm->getClientOriginalName();
         */
        /*         $IFURequest = $this->path->storeAs('IFU', $ifuFile, 'public');
                $RCCMRequest = $this->path_rccm->storeAs('RCCM', $rccmFile, 'public');
         */

        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'rccm' => ['required', 'string', 'max:200', 'unique:companies'],
            'created_date' => ['required', 'date'],
            'ifu' => ['required', 'integer', 'digits:13', 'unique:companies'],
            'email' => ['required', 'string', 'max:255', 'unique:companies'],
            'celphone' => ['required', 'max:255', 'unique:companies'],
        ], [
            'name.required' => 'champ obligatoire',
            'rccm.required' => 'champ obligatoire',
            'created_date.required' => 'champ obligatoire',
            'ifu.required' => 'champ obligatoire',
            'ifu.digits' => '13 chiffres maximum',
            'ifu.unique' => 'Le numéro IFU existe déjà',
            'email.required' => 'champ obligatoire',
            'celphone.required' => 'champ obligatoire',
        ]);
        /*         $ifuFile = 'IFU_DU_'.time().'.'.$this->path->getClientOriginalName();
                $rccmFile = 'RCCM_DU_'.time().'.'.$this->path_rccm->getClientOriginalName();
         */
        /*         $IFURequest = $this->path->storeAs('IFU', $ifuFile, 'public');
                $RCCMRequest = $this->path_rccm->storeAs('RCCM', $rccmFile, 'public');
         */
        try {
            DB::beginTransaction();

            $company = Company::create([
                'name' => $this->name,
                'logo' => is_null($this->logo) ? '' : $this->logo,
                'rccm' => $this->rccm,
                'rccm_file' => '', //$RCCMRequest,
                'created_date' => $this->created_date,
                'ifu' => $this->ifu,
                'ifu_file' => '', //$IFURequest,
                'email' => $this->email,
                'celphone' => $this->celphone,
                'tax_center_id' => $this->tax_center_id,
                'type_company_id' => $this->type_company_id,
                'domain_id' => $this->domain_id,
                'discount_type_id' => $this->discount_type_id,
                'user_id' => request()->user()->id,
            ]);

            foreach ($this->sub_category_id as $key => $value) {
                $company->detailType()->attach($value);
            }

            AmortizationSettingHandler::setup($company->id);
            OtherReintegrationSettingHandler::setup($company->id);
            DeductionSettingHandler::setup($company->id);

//            $type_impot = TypeImpot::where
//
//            $res = TypeCompanyTypeImpot::create([
//               'type_company_id' => 2,
//               'type_impot_id' => 2,
//               'company_id' => $company->id
//           ]);

            DB::commit();

            notify()->success('Entreprise créée avec succès!');

            if (auth()->user()->roles[0]->name == 'enterprise') {
                return redirect()->route('tax-result', $company->id);
            }

            return redirect()->route('company.index');
        } catch (\Throwable $th) {
            $this->notification()->error(
                $title = 'Error !!!',
                $description = "Une erreur est survenue lors de la création de l'entreprise"
            );
            DB::rollBack();
            throw $th;
        }
    }
}
