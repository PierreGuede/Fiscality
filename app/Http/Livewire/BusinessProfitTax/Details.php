<?php

namespace App\Http\Livewire\BusinessProfitTax;

use App\Fiscality\Categories\Category;
use App\Fiscality\Companies\Company;
use App\Fiscality\TaxResult\Repositories\TaxResultRepository;
use App\Fiscality\TypeImpots\TypeImpot;
use App\Models\MinimumTax;
use Carbon\Carbon;
use Livewire\Component;
use WireUi\Traits\Actions;

class Details extends Component
{
    use Actions;

    public Company $company;

    public $max_value = 0;

    public $data;

    public $total = 0;

    public $listeners = ['updateMaxValue' => 'handleMaxValue'];

    public function mount($company)
    {
        $this->company = $company;

        $this->handleMaxValue();
        $this->total = $this->max_value;
    }

    public function render()
    {
        return view('livewire.business-profit-tax.details');
    }

    public function handleMaxValue()
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

        $this->max_value = max(array_values($this->data));
    }

    public function getMinimumTax()
    {
        $typeImpot = TypeImpot::whereCode(TypeImpot::IBA)->first();
        $data = MinimumTax::whereCompanyId($this->company->id)->whereTypeImpotId($typeImpot->id)->whereYear('created_at', Carbon::now()->year)->first();

        return $data ? $data->total : 0;
    }

    private function getCategoryByCode(string $code)
    {
        return  Category::whereCode($code)->first();
    }
}
