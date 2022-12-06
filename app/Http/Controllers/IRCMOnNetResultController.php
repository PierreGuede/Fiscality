<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use App\Fiscality\CorporateTax\Repositories\CorporateTaxRepository;


class IRCMOnNetResultController extends Controller
{
    public function index(Company $company)
    {
        $corporateTax = new CorporateTaxRepository($company);
        $total = $corporateTax->getMax() * (10/100) ;
        return view('admin.ircm-on-net-result.index', compact('company', 'total'));
    }
}
