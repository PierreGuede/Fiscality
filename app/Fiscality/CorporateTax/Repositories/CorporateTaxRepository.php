<?php

namespace App\Fiscality\CorporateTax\Repositories;

use App\Fiscality\Categories\Category;
use App\Fiscality\Companies\Company;
use App\Fiscality\CorporateTax\Repositories\Interfaces\CorporateTaxRepositoryInterface;
use App\Fiscality\TaxResult\Repositories\TaxResultRepository;
use App\Models\MinimumTax;
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
