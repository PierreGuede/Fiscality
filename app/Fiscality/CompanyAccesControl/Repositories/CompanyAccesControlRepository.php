<?php

namespace App\Fiscality\CompanyAccesControl\Repositories;


use App\Fiscality\CompanyAccesControl\CompanyAccesControl;
use App\Fiscality\CompanyAccesControl\Repositories\Interfaces\CompanyAccesControlRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CompanyAccesControlRepository implements CompanyAccesControlRepositoryInterface
{
    public CompanyAccesControl $model;
    public User $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function connected(int $company_id): CompanyAccesControl
    {

     $res =  CompanyAccesControl::create([
            'user_id' => $this->user->id,
            'company_id' => $company_id,
        ]);

     return $res;
    }

    public function disconected(): bool
    {
        CompanyAccesControl::whereUserId($this->user->id)->whereIsDisconnected(false)->update(['is_disconnected' => true]);
        return true;
    }

    public function findOne(int $company_id): CompanyAccesControl
    {
       $res = CompanyAccesControl::whereUserId($this->user->id)->whereCompanyId($company_id)->first();

       return $res;
    }

}
