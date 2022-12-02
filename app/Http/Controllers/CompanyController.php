<?php

namespace App\Http\Controllers;

use App\Fiscality\Categories\Category;
use App\Fiscality\Companies\Company;
use App\Fiscality\Companies\Requests\CreateCompanyRequest;
use App\Fiscality\Companies\Requests\UpdateCompanyRequest;
use App\Fiscality\Domains\Domain;
use App\Fiscality\TaxCenters\TaxCenter;
use App\Fiscality\TypeCompanies\TypeCompany;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public $model;

    public $typeCompany;

    public $category;

    public $domain;

    public $taxCenter;

    public $storage;

    public function __construct(Company $model, TypeCompany $typeCompany, Category $category, Domain $domain, TaxCenter $taxCenter, Storage $storage)
    {
        $this->model = $model;
        $this->typeCompany = $typeCompany;
        $this->category = $category;
        $this->domain = $domain;
        $this->taxCenter = $taxCenter;
        $this->storage = $storage;
    }

    public function index()
    {
        $user = request()->user();
        if ($user->hasRole('Super-Admin')) {
            $company = $this->model->whereNull('company_id')->get();

            return view('admin.companies.indexAdmin', ['company' => $company]);
        }
        $company = $this->model->where('user_id', request()->user()->id)->get();
        $company_mere = $this->model->where('user_id', request()->user()->id)->whereNotNull('company_id')->get();

        return view('admin.companies.index', ['company' => $company, 'mere' => $company_mere]);
    }

    public function setEntrepriseInformation()
    {
        return view('admin.companies.set-entreprise-information');
    }

    public function create()
    {
        $company = $this->model->where('user_id', request()->user()->id)->get();

        if (count($company) < request()->user()->subscription->packs->max) {
            $type = $this->typeCompany->all();
            $typeCat = $this->category->all();
            $domain = $this->domain->all();
            $taxCenter = $this->taxCenter->all();

            return view('auth.choseRole', compact('type', 'typeCat', 'domain', 'taxCenter'));
        } else {
            return abort(403, 'Vous avez atteint le max');
        }
    }

    public function store(CreateCompanyRequest $data): Company
    {
        $ifuFile = 'IFU_DU'.time().'.'.$data['path']->extension();
        $rccmFile = 'RCCM_DU'.time().'.'.$data['path_rccm']->extension();
        $IFURequest = $data->file('path')->storeAs('IFU', $ifuFile, 'public');
        $RCCMRequest = $data->file('path')->storeAs('RCCM', $rccmFile, 'public');
        $store = $this->model->create([
            'name' => $data['name'],
            'rccm' => $data['rccm'],
            'path_rccm' => $RCCMRequest,
            'created_date' => $data['created_date'],
            'ifu' => $data['ifu'],
            'path' => $IFURequest,
            'email' => $data['email'],
            'celphone' => $data['celphone'],
            'centre' => $data['centre'],
            'type_company_id' => $data['type_company_id'],
            'category_id' => $data['category_id'],
            'domain_id' => $data['domain_id'],
            'company_id' => $data['company_id'],
            'user_id' => request()->user()->id,
        ]);

        return redirect()->route('company.index');
        // return $store;
    }

    public function edit(Company $id)
    {
        $user = request()->user();
        if ($user->hasRole('Super-Admin')) {
            return view('admin.companies.infoAdmin', ['company' => $id]);
        }

        return view('admin.companies.info', ['company' => $id]);
    }

    public function update(UpdateCompanyRequest $data, Company $company): Company
    {
        $company->update(['name' => $data['name']]);

        return $company;
    }

    public function acceptCompany($id)
    {
        $company = $this->model->find($id);
        $company->status = 'approuved';
        $company->update();

        return redirect()->back();
    }

    public function rejectCompany($id)
    {
        $company = $this->model->find($id);
        $company->status = 'rejected';
        $company->update();

        return redirect()->back();
    }

    public function activeCompany($id)
    {
        $company = $this->model->find($id);
        $company->is_confirmed = 1;
        $company->update();

        return redirect()->back();
    }

    public function blockCompany($id)
    {
        $company = $this->model->find($id);
        $company->is_active = 1;
        $company->update();

        return redirect()->back();
    }

    public function unblockCompany($id)
    {
        $company = $this->model->find($id);
        $company->is_active = 0;
        $company->update();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $company = $this->model->find($id);

        return $company->delete();
        // return redirect()->route('company.index');
    }

    public function downloadIfu(Company $id)
    {
        return $this->storage->download('public/'.$id->path);
    }

    public function downloadRCCM(Company $id)
    {
        return $this->storage->download('public/'.$id->path_rccm);
    }
}
