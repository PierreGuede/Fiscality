<?php

namespace App\Fiscality\CorporateTax\Repositories;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\AdvertisingGifts\AdvertisingGift;
use App\Fiscality\AssistanceCosts\AssistanceCost;
use App\Fiscality\Categories\Category;
use App\Fiscality\CommissionOnPurchases\CommissionOnPurchase;
use App\Fiscality\Companies\Company;
use App\Fiscality\CorporateTax\Repositories\Interfaces\CorporateTaxRepositoryInterface;
use App\Fiscality\Depreciations\Depreciation;
use App\Fiscality\ExcessRents\ExcessRent;
use App\Fiscality\Excesss\Excess;
use App\Fiscality\FinancialCosts\FinancialCost;
use App\Fiscality\Redevances\Redevance;
use App\Fiscality\TaxResult\Repositories\TaxResultRepository;
use App\Fiscality\Vehicles\Vehicle;
use App\Models\AccuredChargeCompany;
use App\Models\Deduction;
use App\Models\DonationGrantContribution;
use App\Models\HeadOfficeCost;
use App\Models\MinimumTax;
use App\Models\OtherReintegration;
use Carbon\Carbon;

class CorporateTaxRepository implements CorporateTaxRepositoryInterface
{
    public Company $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function getMax()
    {
        $taxResultRepository = new TaxResultRepository($this->company);
        $total_result_before_deficit_report = $taxResultRepository->getTotalTaxResultBeforeDeficitReport();

        $impot_reel = $this->company->detailType()->where('category_id', $this->getCategoryByCode(Category::IMPOT_REEL)->id)->get();
        $impot_minimun_forfetaire = $this->company->detailType()->where('category_id', $this->getCategoryByCode(Category::IMPOT_MINIMUM_FORFETAIRE)->id)->get();

        $this->data = [
            'impot_reel' => (float) $total_result_before_deficit_report * (float) ($impot_reel[0]->taux / 100),
            'impot_minimum' => $this->getMinimumTax(),
            'impot_minimum_forfetaire' => $impot_minimun_forfetaire[0]->taux,
        ];

        return max(array_values($this->data));
    }

    public function getMinimumTax()
    {
        $data = MinimumTax::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return $data ? $data->total : 0;
    }

    private function getCategoryByCode(string $code)
    {
        return  Category::whereCode($code)->first();
    }
}
