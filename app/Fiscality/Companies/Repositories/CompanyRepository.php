<?php

namespace App\Fiscality\Companies\Repositories;

use App\Fiscality\Categories\Category;
use App\Fiscality\Companies\Company;
use App\Fiscality\Companies\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Fiscality\Companies\Resources\CompanyResource;
use App\Fiscality\Domains\Domain;
use App\Fiscality\TaxCenters\TaxCenter;
use App\Fiscality\TypeCompanies\TypeCompany;
use Illuminate\Support\Facades\Storage;

class CompanyRepository implements CompanyRepositoryInterface
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
        $company = CompanyResource::collection($this->model->all());

        return response()->json([
            'company' => $company,
        ]);
    }

    public function store(array $data): Company
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

        return $store;
    }

    public function find(int $id)
    {
        try {
            return new CompanyResource($this->model->findOrFail($id));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): Company
    {
        $company = $this->model->find($id);

        return $company;
        $company->update($data);
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
