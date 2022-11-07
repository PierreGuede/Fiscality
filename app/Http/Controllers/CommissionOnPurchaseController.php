<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fiscality\Companies\Company;
use App\Fiscality\CommissionOnPurchases\CommissionOnPurchase;
use App\Fiscality\CommissionOnPurchaseDetails\CommissionOnPurchaseDetail;

class CommissionOnPurchaseController extends Controller
{
    public function index($id){
        $company=Company::find($id);
        return view();
    }
    public function store(Request $request,$id){

            $limit_deduction=$request["total"]*0.05;
            $no_deductible_amount=$request["amount_commission"]-$limit_deduction;

            $commission=CommissionOnPurchase::create([
                'renseigned_commission'=>$no_deductible_amount,
                'company_id'=>$id
            ]);

            CommissionOnPurchaseDetail::create([
                "Account"=>$request['Account'],
                "designation"=>$request['designation'],
                "total"=>$request['total'],
                "amount_commission"=>$request['amount_commission'],
                "limit"=>$limit_deduction,
                "no_deductible_amount"=>$no_deductible_amount,
                'commission_on_purchase_detail_id'=>$commission->id
            ]);

    }
}
