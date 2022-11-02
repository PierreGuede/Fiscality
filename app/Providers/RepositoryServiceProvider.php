<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            "App\Fiscality\Auth\Repositories\Interfaces\AuthRepositoryInterface",
            "App\Fiscality\Auth\Repositories\AuthRepository"
        );
        $this->app->bind(
            "App\Fiscality\Users\Repositories\Interfaces\UserRepositoryInterface",
            "App\Fiscality\Users\Repositories\UserRepository"
        );

        $this->app->bind(
            "App\Fiscality\AccountingResults\Repositories\Interfaces\AccountingResultRepositoryInterface",
            "App\Fiscality\AccountingResults\Repositories\AccountingResultRepository"
        );
        $this->app->bind(
            "App\Fiscality\Bases\Repositories\Interfaces\BaseRepositoryInterface",
            "App\Fiscality\Bases\Repositories\BaseRepository"
        );
        $this->app->bind(
            "App\Fiscality\Categories\Repositories\Interfaces\CategoryRepositoryInterface",
            "App\Fiscality\Categories\Repositories\CategoryRepository",
        );
        $this->app->bind(
            "App\Fiscality\Charges\Repositories\Interfaces\ChargeRepositoryInterface",
            "App\Fiscality\Charges\Repositories\ChargeRepository",
        );
        $this->app->bind(
            "App\Fiscality\Companies\Repositories\Interfaces\CompanyRepositoryInterface",
            "App\Fiscality\Companies\Repositories\CompanyRepository",
        );
        $this->app->bind(
            "App\Fiscality\DetailTypes\Repositories\Interfaces\DetailTypeRepositoryInterface",
            "App\Fiscality\DetailTypes\Repositories\DetailTypeRepository",
        );
        $this->app->bind(
            "App\Fiscality\Domains\Repositories\Interfaces\DomainRepositoryInterface",
            "App\Fiscality\Domains\Repositories\DomainRepository",
        );
        $this->app->bind(
            "App\Fiscality\IMCalculationDetails\Repositories\Interfaces\IMCalculationDetailRepositoryInterface",
            "App\Fiscality\IMCalculationDetails\Repositories\IMCalculationDetailRepository",
        );
        $this->app->bind(
            "App\Fiscality\IMCalculations\Repositories\Interfaces\IMCalculationRepositoryInterface",
            "App\Fiscality\IMCalculations\Repositories\IMCalculationRepository",
        );
        $this->app->bind(
            "App\Fiscality\IMItems\Repositories\Interfaces\IMItemRepositoryInterface",
            "App\Fiscality\IMItems\Repositories\IMItemRepository",
        );
        $this->app->bind(
            "App\Fiscality\IncomeExpenses\Repositories\Interfaces\IncomeExpenseRepositoryInterface",
            "App\Fiscality\IncomeExpenses\Repositories\IncomeExpenseRepository",
        );
        $this->app->bind(
            "App\Fiscality\Packs\Repositories\Interfaces\PackRepositoryInterface",
            "App\Fiscality\Packs\Repositories\PackRepository"
        );
        $this->app->bind(
            "App\Fiscality\PackUsers\Repositories\Interfaces\PackUserRepositoryInterface",
            "App\Fiscality\PackUsers\Repositories\PackUserRepository"
        );
        $this->app->bind(
            "App\Fiscality\PrincipalActivities\Repositories\Interfaces\PrincipalActivityRepositoryInterface",
            "App\Fiscality\PrincipalActivities\Repositories\PrincipalActivityRepository"
        );
        $this->app->bind(
            "App\Fiscality\ProfileUsers\Repositories\Interfaces\ProfileUserRepositoryInterface",
            "App\Fiscality\ProfileUsers\Repositories\ProfileUserRepository"
        );
        $this->app->bind(
            "App\Fiscality\RADetails\Repositories\Interfaces\RADetailRepositoryInterface",
            "App\Fiscality\RADetails\Repositories\RADetailRepository"
        );
        $this->app->bind(
            "App\Fiscality\TaxBases\Repositories\Interfaces\TaxBaseRepositoryInterface",
            "App\Fiscality\TaxBases\Repositories\TaxBaseRepository"
        );
        $this->app->bind(
            "App\Fiscality\TaxCenters\Repositories\Interfaces\TaxCenterRepositoryInterface",
            "App\Fiscality\TaxCenters\Repositories\TaxCenterRepository"
        );
        $this->app->bind(
            "App\Fiscality\TypeCompanies\Repositories\Interfaces\TypeCompanyRepositoryInterface",
            "App\Fiscality\TypeCompanies\Repositories\TypeCompanyRepository"
        );
        $this->app->bind(
            "App\Fiscality\TypeImpots\Repositories\Interfaces\TypeImpotRepositoryInterface",
            "App\Fiscality\TypeImpots\Repositories\TypeImpotRepository"
        );
        $this->app->bind(
            "App\Fiscality\Amortizations\Repositories\Interfaces\AmortizationRepositoryInterface",
            "App\Fiscality\Amortizations\Repositories\AmortizationRepository"
        );
        // FOR IMCALCULS $this->app->bind();
    }
}
