<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('auth')->group(function () {
    Route::post('/register', ["App\Http\Controllers\AuthController", 'register']);
    Route::post('/login', ["App\Http\Controllers\AuthController", 'login']);
    Route::post('/logout', ["App\Http\Controllers\AuthController", 'logout']);
    Route::get('/email/verify/{id}/{hash}', "App\Http\Controllers\VerifyEmailController")
    ->middleware(['auth:sanctum', 'signed'])->name('verification.verify');
    Route::post('/email/verification-notification', "App\Http\Controllers\SendMailVerificationController")
    ->middleware(['auth:sanctum', 'throttle:6,1'])->name('verification.send');
});

    Route::get('/towns', function (){
        return \App\Models\Town::all();
    })->name('api.towns');
Route::prefix('api')->middleware('auth:sanctum')->group(function () {
    Route::get('/user', ["App\Http\Controllers\AuthController", 'me']);

    Route::get('accounting-result', ["App\Fiscality\AccountingResults\Controllers\AccountingResultController", 'index']);
    Route::post('accounting-result', ["App\Fiscality\AccountingResults\Controllers\AccountingResultController", 'store']);
    Route::get('accounting-result/{id}', ["App\Fiscality\AccountingResults\Controllers\AccountingResultController", 'find']);
    Route::put('accounting-result', ["App\Fiscality\AccountingResults\Controllers\AccountingResultController", 'update']);
    Route::delete('accounting-result/{id}', ["App\Fiscality\AccountingResults\Controllers\AccountingResultController", 'destroy']);

    Route::get('base', ["App\Fiscality\Bases\Controllers\BaseController", 'index']);
    Route::post('base', ["App\Fiscality\Bases\Controllers\BaseController", 'store']);
    Route::get('base/{id}', ["App\Fiscality\Bases\Controllers\BaseController", 'find']);
    Route::put('base/{id}', ["App\Fiscality\Bases\Controllers\BaseController", 'update']);
    Route::delete('base/{id}', ["App\Fiscality\Bases\Controllers\BaseController", 'destroy']);

    Route::get('category', ["App\Fiscality\Categories\Controllers\CategoryController", 'index']);
    Route::post('category', ["App\Fiscality\Categories\Controllers\CategoryController", 'store']);
    Route::get('category/{id}', ["App\Fiscality\Categories\Controllers\CategoryController", 'find']);
    Route::put('category/{id}', ["App\Fiscality\Categories\Controllers\CategoryController", 'update']);
    Route::delete('category/{id}', ["App\Fiscality\Categories\Controllers\CategoryController", 'destroy']);

    Route::get('company', ["App\Fiscality\Companies\Controllers\CompanyController", 'index']);
    Route::post('company', ["App\Fiscality\Companies\Controllers\CompanyController", 'store']);
    Route::get('company/{id}', ["App\Fiscality\Companies\Controllers\CompanyController", 'find']);
    Route::get('company/{id}', ["App\Fiscality\Companies\Controllers\CompanyController", 'find']);
    Route::put('company', ["App\Fiscality\Companies\Controllers\CompanyController", 'update']);
    Route::delete('company/{id}', ["App\Fiscality\Companies\Controllers\CompanyController", 'destroy']);

    Route::get('detail-Type', ["App\Fiscality\DetailTypes\Controllers\DetailTypeController", 'index']);
    Route::post('detail-Type', ["App\Fiscality\DetailTypes\Controllers\DetailTypeController", 'store']);
    Route::get('detail-Type/{id}', ["App\Fiscality\DetailTypes\Controllers\DetailTypeController", 'find']);
    Route::put('detail-Type/{id}', ["App\Fiscality\DetailTypes\Controllers\DetailTypeController", 'update']);
    Route::delete('detail-Type/{id}', ["App\Fiscality\DetailTypes\Controllers\DetailTypeController", 'destroy']);

    Route::get('domain', ["App\Fiscality\Domains\Controllers\DomainController", 'index']);
    Route::post('domain', ["App\Fiscality\Domains\Controllers\DomainController", 'store']);
    Route::get('domain/{id}', ["App\Fiscality\Domains\Controllers\DomainController", 'find']);
    Route::put('domain/{id}', ["App\Fiscality\Domains\Controllers\DomainController", 'update']);
    Route::delete('domain/{id}', ["App\Fiscality\Domains\Controllers\DomainController", 'destroy']);

    Route::get('im-calculation-detail', ["App\Fiscality\IMCalculationDetails\Controllers\IMCalculationDetailController", 'index']);
    Route::post('im-calculation-detail', ["App\Fiscality\IMCalculationDetails\Controllers\IMCalculationDetailController", 'store']);
    Route::get('im-calculation-detail/{id}', ["App\Fiscality\IMCalculationDetails\Controllers\IMCalculationDetailController", 'find']);
    Route::put('im-calculation-detail/{id}', ["App\Fiscality\IMCalculationDetails\Controllers\IMCalculationDetailController", 'update']);
    Route::delete('im-calculation-detail/{id}', ["App\Fiscality\IMCalculationDetails\Controllers\IMCalculationDetailController", 'destroy']);

    Route::get('im-calculation', ["App\Fiscality\IMCalculations\Controllers\IMCalculationController", 'index']);
    Route::post('im-calculation', ["App\Fiscality\IMCalculations\Controllers\IMCalculationController", 'store']);
    Route::get('im-calculation/{id}', ["App\Fiscality\IMCalculations\Controllers\IMCalculationController", 'find']);
    Route::put('im-calculation/{id}', ["App\Fiscality\IMCalculations\Controllers\IMCalculationController", 'update']);
    Route::delete('im-calculation/{id}', ["App\Fiscality\IMCalculations\Controllers\IMCalculationController", 'destroy']);

    Route::get('im-item', ["App\Fiscality\IMItems\Controllers\IMItemController", 'index']);
    Route::post('im-item', ["App\Fiscality\IMItems\Controllers\IMItemController", 'store']);
    Route::get('im-item/{id}', ["App\Fiscality\IMItems\Controllers\IMItemController", 'find']);
    Route::put('im-item/{id}', ["App\Fiscality\IMItems\Controllers\IMItemController", 'update']);
    Route::delete('im-item/{id}', ["App\Fiscality\IMItems\Controllers\IMItemController", 'destroy']);

    Route::get('income-expense', ["App\Fiscality\IncomeExpenses\Controllers\IncomeExpenseController", 'index']);
    Route::post('income-expense', ["App\Fiscality\IncomeExpenses\Controllers\IncomeExpenseController", 'store']);
    Route::get('income-expense/{id}', ["App\Fiscality\IncomeExpenses\Controllers\IncomeExpenseController", 'find']);
    Route::put('income-expense/{id}', ["App\Fiscality\IncomeExpenses\Controllers\IncomeExpenseController", 'update']);
    Route::delete('income-expense/{id}', ["App\Fiscality\IncomeExpenses\Controllers\IncomeExpenseController", 'destroy']);

    Route::get('pack', ["App\Fiscality\Packs\Controllers\PackController", 'index']);
    Route::post('pack', ["App\Fiscality\Packs\Controllers\PackController", 'store']);
    Route::get('pack/{id}', ["App\Fiscality\Packs\Controllers\PackController", 'find']);
    Route::put('pack/{id}', ["App\Fiscality\Packs\Controllers\PackController", 'update']);
    Route::delete('pack/{id}', ["App\Fiscality\Packs\Controllers\PackController", 'destroy']);

    Route::get('pack-user', ["App\Fiscality\PackUsers\Controllers\PackUserController", 'index']);
    Route::post('pack-user', ["App\Fiscality\PackUsers\Controllers\PackUserController", 'store']);
    Route::get('pack-user/{id}', ["App\Fiscality\PackUsers\Controllers\PackUserController", 'find']);
    Route::put('pack-user/{id}', ["App\Fiscality\PackUsers\Controllers\PackUserController", 'update']);
    Route::delete('pack-user/{id}', ["App\Fiscality\PackUsers\Controllers\PackUserController", 'destroy']);

    Route::get('principal-activity', ["App\Fiscality\PrincipalActivities\Controllers\PrincipalActivityController", 'index']);
    Route::post('principal-activity', ["App\Fiscality\PrincipalActivities\Controllers\PrincipalActivityController", 'store']);
    Route::get('principal-activity/{id}', ["App\Fiscality\PrincipalActivities\Controllers\PrincipalActivityController", 'find']);
    Route::put('principal-activity/{id}', ["App\Fiscality\PrincipalActivities\Controllers\PrincipalActivityController", 'update']);
    Route::delete('principal-activity/{id}', ["App\Fiscality\PrincipalActivities\Controllers\PrincipalActivityController", 'destroy']);

    Route::get('profile-user', ["App\Fiscality\ProfileUsers\Controllers\ProfileUserController", 'index']);
    Route::post('profile-user', ["App\Fiscality\ProfileUsers\Controllers\ProfileUserController", 'store']);
    Route::get('profile-user/{id}', ["App\Fiscality\ProfileUsers\Controllers\ProfileUserController", 'find']);
    Route::put('profile-user/{id}', ["App\Fiscality\ProfileUsers\Controllers\ProfileUserController", 'update']);
    Route::delete('profile-user/{id}', ["App\Fiscality\ProfileUsers\Controllers\ProfileUserController", 'destroy']);

    Route::get('ra-detail', ["App\Fiscality\RADetails\Controllers\RADetailController", 'index']);
    Route::post('ra-detail', ["App\Fiscality\RADetails\Controllers\RADetailController", 'store']);
    Route::get('ra-detail/{id}', ["App\Fiscality\RADetails\Controllers\RADetailController", 'find']);
    Route::put('ra-detail/{id}', ["App\Fiscality\RADetails\Controllers\RADetailController", 'update']);
    Route::delete('ra-detail/{id}', ["App\Fiscality\RADetails\Controllers\RADetailController", 'destroy']);

    Route::get('tax-base', ["App\Fiscality\TaxBases\Controllers\TaxBaseController", 'index']);
    Route::post('tax-base', ["App\Fiscality\TaxBases\Controllers\TaxBaseController", 'store']);
    Route::get('tax-base/{id}', ["App\Fiscality\TaxBases\Controllers\TaxBaseController", 'find']);
    Route::put('tax-base/{id}', ["App\Fiscality\TaxBases\Controllers\TaxBaseController", 'update']);
    Route::delete('tax-base/{id}', ["App\Fiscality\TaxBases\Controllers\TaxBaseController", 'destroy']);

    Route::get('tax-center', ["App\Fiscality\TaxCenters\Controllers\TaxCenterController", 'index']);
    Route::post('tax-center', ["App\Fiscality\TaxCenters\Controllers\TaxCenterController", 'store']);
    Route::get('tax-center/{id}', ["App\Fiscality\TaxCenters\Controllers\TaxCenterController", 'find']);
    Route::put('tax-center/{id}', ["App\Fiscality\TaxCenters\Controllers\TaxCenterController", 'update']);
    Route::delete('tax-center/{id}', ["App\Fiscality\TaxCenters\Controllers\TaxCenterController", 'destroy']);

    Route::get('type-company', ["App\Fiscality\TypeCompanies\Controllers\TypeCompanyController", 'index']);
    Route::post('type-company', ["App\Fiscality\TypeCompanies\Controllers\TypeCompanyController", 'store']);
    Route::get('type-company/{id}', ["App\Fiscality\TypeCompanies\Controllers\TypeCompanyController", 'find']);
    Route::put('type-company/{id}', ["App\Fiscality\TypeCompanies\Controllers\TypeCompanyController", 'update']);
    Route::delete('type-company/{id}', ["App\Fiscality\TypeCompanies\Controllers\TypeCompanyController", 'destroy']);

    Route::get('type-impot', ["App\Fiscality\TypeImpots\Controllers\TypeImpotController", 'index']);
    Route::post('type-impot', ["App\Fiscality\TypeImpots\Controllers\TypeImpotController", 'store']);
    Route::get('type-impot/{id}', ["App\Fiscality\TypeImpots\Controllers\TypeImpotController", 'find']);
    Route::put('type-impot/{id}', ["App\Fiscality\TypeImpots\Controllers\TypeImpotController", 'update']);
    Route::delete('type-impot/{id}', ["App\Fiscality\TypeImpots\Controllers\TypeImpotController", 'destroy']);

    Route::get('amortization', ["App\Fiscality\Amortizations\Controllers\AmortizationController", 'index']);
    Route::post('amortization', ["App\Fiscality\Amortizations\Controllers\AmortizationController", 'store']);
    Route::get('amortization/{id}', ["App\Fiscality\Amortizations\Controllers\AmortizationController", 'find']);
    Route::put('amortization/{id}', ["App\Fiscality\Amortizations\Controllers\AmortizationController", 'update']);
    Route::delete('amortization/{id}', ["App\Fiscality\Amortizations\Controllers\AmortizationController", 'destroy']);
});
