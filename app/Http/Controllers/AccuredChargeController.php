<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fiscality\Companies\Company;
use App\Fiscality\AccuredCharges\AccuredCharge;

class AccuredChargeController extends Controller
{
    public $model;
    public function __construct(AccuredCharge $model)
    {
        $this->model=$model;
    }

    public function index($id)
    {
        $company=Company::find($id);
        return view('admin.adminWork.accuredCharge',compact('company'));
    }
    public function provision($id){
        $company=Company::find($id);
        return view('admin.adminWork.provision',[
            'company'=>$company
        ]);
    }

    public function expenseProvisioned($id){
        $company=Company::find($id);
        return view('admin.adminWork.expenseProvisioned',[
            'company'=>$company
        ]);
    }

    public function store(Request $data,$id)
    {

        $this->model->create([
            'compte'=>$data['compte'],
            'designation'=>$data['designation'],
            'type'=>$data['type'],
        ]);
    }
}
