<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'hasOneRole'])->name('dashboard');

Route::get('infoProfile', [\App\Http\Controllers\UserController::class, 'enterprise'])->name('users.enterprise')->middleware(['auth']);
require __DIR__.'/auth.php';

Route::post('company', [\App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');

Route::middleware('auth', 'hasOneRole')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::middleware('role:Super-Admin|cabinet|enterprise')->group(function () {
        Route::get('company', [\App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
        Route::get('company/{id}', [\App\Http\Controllers\CompanyController::class, 'edit'])->name('company.edit');
        Route::get('company/downlad-ifu/{id}', [\App\Http\Controllers\CompanyController::class, 'downloadIfu'])->name('company.downladIFU');
        Route::get('company/downlad-rcccm/{id}', [\App\Http\Controllers\CompanyController::class, 'downloadRCCM'])->name('company.downladRCCM');
        Route::post('company/{id}', [\App\Http\Controllers\CompanyController::class, 'update'])->name('company.update');
        Route::delete('company/{id}', [\App\Http\Controllers\CompanyController::class, 'destroy'])->name('company.delete');
    });

    Route::middleware('role:cabinet|enterprise')->group(function () {
        Route::get('create-company', [\App\Http\Controllers\CompanyController::class, 'create'])->name('company.enterprise');
        Route::get('work-in-enterprise/{company}', [\App\Http\Controllers\WorkInEnterprise::class, 'index'])->name('work.show');
        Route::post('work-in-enterprise/{company}', [\App\Http\Controllers\WorkInEnterprise::class, 'access'])->name('work.access');
        Route::get('work-in-enterprise/{company}/actions', [\App\Http\Controllers\WorkInEnterprise::class, 'actions'])->name('work.actions');
        Route::get('work-in-enterprise/{company}/account-result', [\App\Http\Controllers\WorkInEnterprise::class, 'accountResult'])->name('work.accountResult');
        Route::get('work-in-enterprise/{company}/impot-calcul', [\App\Http\Controllers\WorkInEnterprise::class, 'impotcalcul'])->name('work.impotcalcul');

        Route::get('work-in-enterprise/{company}/tax-result', [\App\Http\Controllers\TaxResultController::class, 'index'])->name('tax-result');
        Route::get('work-in-enterprise/{company}/tax-result/account-result', [\App\Http\Controllers\AccountResultController::class, 'index'])->name('tax-result.account-result');
        Route::get('work-in-enterprise/{company}/tax-result/account-result/income', [\App\Http\Controllers\AccountResultController::class, 'income'])->name('tax-result.account-result.income');
        Route::get('work-in-enterprise/{company}/tax-result/account-result/expense', [\App\Http\Controllers\AccountResultController::class, 'expense'])->name('tax-result.account-result.expense');
        Route::get('work-in-enterprise/{company}/tax-result/non-deductible-charge', [\App\Http\Controllers\NonDeductibleChargeController::class, 'index'])->name('tax-result.reintegration.non-deductible-charge');
        Route::get('work-in-enterprise/{company}/tax-result/deduction', [\App\Http\Controllers\DeductionController::class, 'index'])->name('tax-result.deduction');
        Route::post('work-in-enterprise/{company}/tax-result/deduction', [\App\Http\Controllers\DeductionController::class, 'store'])->name('tax-result.deduction.store');

        Route::get('work-in-enterprise/{company}/tax-result/amortization', [\App\Fiscality\AmortizationDetails\Controllers\AmortizationDetailsController::class, 'index'])->name('tax-result.reintegration.amortization');
        Route::get('work-in-enterprise/{company}/tax-result/amortization/tourism-cars', [\App\Http\Controllers\VehicleController::class, 'index'])->name('amortization.tourism-cars');
        Route::get('work-in-enterprise/{company}/tax-result/amortization/tourism-cars/{vehicle}', [\App\Http\Controllers\VehicleController::class, 'edit'])->name('amortization.tourism-cars.edit');
        Route::put('work-in-enterprise/{company}/tax-result/amortization/tourism-cars/{vehicle}', [\App\Http\Controllers\VehicleController::class, 'update'])->name('amortization.tourism-cars.update');
        Route::get('work-in-enterprise/{company}/tax-result/amortization/amortization-excess', [\App\Http\Controllers\ExcessController::class, 'index'])->name('amortization.amortization-excess');
        Route::get('work-in-enterprise/{company}/tax-result/amortization/amortization-excess/{excess}', [\App\Http\Controllers\ExcessController::class, 'edit'])->name('amortization.amortization-excess.edit');
        Route::put('work-in-enterprise/{company}/tax-result/amortization/amortization-excess/{excess}', [\App\Http\Controllers\ExcessController::class, 'update'])->name('amortization.amortization-excess.update');
        Route::get('work-in-enterprise/{company}/tax-result/amortization/depreciation-assets', [\App\Http\Controllers\DepreciationController::class, 'index'])->name('amortization.depreciation-assets');
        Route::get('work-in-enterprise/{company}/tax-result/amortization/depreciation-assets/{depreciation}', [\App\Http\Controllers\DepreciationController::class, 'edit'])->name('amortization.depreciation-assets.edit');
        Route::put('work-in-enterprise/{company}/tax-result/amortization/depreciation-assets/{depreciation}', [\App\Http\Controllers\DepreciationController::class, 'update'])->name('amortization.depreciation-assets.update');

        Route::get('work-in-enterprise/{company}/accured-charge', [\App\Http\Controllers\AccuredChargeController::class, 'index'])->name('tax-result.reintegration.accured-charge');
        Route::get('work-in-enterprise/{company}/accured-charge/provision', [\App\Http\Controllers\AccuredChargeController::class, 'provision'])->name('work.provision');
        Route::get('work-in-enterprise/{company}/accured-charge/provision/details', [\App\Http\Controllers\AccuredChargeCompanyController::class, 'indexProvision'])->name('work.provision.details');
        Route::get('work-in-enterprise/{company}/accured-charge/provision/details/{accuredChargeCompany}', [\App\Http\Controllers\AccuredChargeCompanyController::class, 'editProvision'])->name('work.provision.edit');
        Route::get('work-in-enterprise/{company}/accured-charge/provisioned-expense', [\App\Http\Controllers\AccuredChargeController::class, 'expenseProvisioned'])->name('work.expenseProvisioned');
        Route::get('work-in-enterprise/{company}/accured-charge/provisioned-expense/details', [\App\Http\Controllers\AccuredChargeCompanyController::class, 'indexExpenseProvisionned'])->name('work.expenseProvisioned.details');
        Route::get('work-in-enterprise/{company}/accured-charge/provisioned-expense/details/{accuredChargeCompany}', [\App\Http\Controllers\AccuredChargeCompanyController::class, 'editExpenseProvisionned'])->name('work.expenseProvisioned.edit');
        Route::put('work-in-enterprise/{company}/accured-charge/provisioned-expense/provision/update/{accuredChargeCompany}', [\App\Http\Controllers\AccuredChargeCompanyController::class, 'update'])->name('work.accuredCharge.update');
        Route::get('work-in-enterprise/{company}/accured-charge/personnal-expense', [\App\Http\Controllers\AccuredChargeController::class, 'personalExpense'])->name('work.personalExpense');
        Route::get('work-in-enterprise/{company}/accured-charge/personnal-expense/details', [\App\Http\Controllers\AccuredChargeCompanyController::class, 'indexPersonnalExpense'])->name('work.personnalExpense.details');
        Route::get('work-in-enterprise/{company}/accured-charge/personnal-expense/details/{accuredChargeCompany}', [\App\Http\Controllers\AccuredChargeCompanyController::class, 'editPersonnalExpense'])->name('work.personnalExpense.edit');

        Route::get('work-in-enterprise/{company}/other-reintegration', [\App\Http\Controllers\OtherReintegrationController::class, 'index'])->name('work.other-reintegration');

        Route::get('work-in-enterprise/{company}/other-reintegration/commission-purchase', [\App\Http\Controllers\CommissionOnPurchaseController::class, 'index'])->name('work.commissionPurchase');

        Route::get('work-in-enterprise/{company}/head-office-costs', [\App\Http\Controllers\HeadOfficeCostController::class, 'index'])->name('head-office-costs');
    });
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::post('users', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('users/{id}', [\App\Http\Controllers\UserController::class, 'find'])->name('users.find');
    Route::post('users/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('users/{id}', [\App\Http\Controllers\UserController::class, 'delete'])->name('users.delete');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
Route::middleware('auth', 'role:Super-Admin|cabinet|enterprise')->group(function () {
    Route::get('role', [\App\Http\Controllers\RoleController::class, 'index'])->name('role.index');
    Route::post('role', [\App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
    Route::get('role/{id}', [\App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
    Route::post('role/{id}', [\App\Http\Controllers\RoleController::class, 'update'])->name('role.update');
    Route::delete('role/{id}', [\App\Http\Controllers\RoleController::class, 'destroy'])->name('role.delete');

    Route::get('permission', [\App\Http\Controllers\PermissionController::class, 'index'])->name('permission.index');
    Route::post('permission', [\App\Http\Controllers\PermissionController::class, 'store'])->name('permission.store');
    Route::get('permission/{id}', [\App\Http\Controllers\PermissionController::class, 'edit'])->name('permission.edit');
    Route::post('permission/{id}', [\App\Http\Controllers\PermissionController::class, 'update'])->name('permission.update');
    Route::delete('permission/{id}', [\App\Http\Controllers\PermissionController::class, 'destroy'])->name('permission.delete');
});

Route::middleware('auth', 'role:Super-Admin')->group(function () {
    Route::get('company/accept/{id}', [\App\Http\Controllers\CompanyController::class, 'acceptCompany'])->name('company.acceptCompany');
    Route::get('company/reject/{id}', [\App\Http\Controllers\CompanyController::class, 'rejectCompany'])->name('company.rejectCompany');
    Route::get('company/active/{id}', [\App\Http\Controllers\CompanyController::class, 'activeCompany'])->name('company.activeCompany');
    Route::get('company/block/{id}', [\App\Http\Controllers\CompanyController::class, 'blockCompany'])->name('company.blockCompany');
    Route::get('company/unblock/{id}', [\App\Http\Controllers\CompanyController::class, 'unblockCompany'])->name('company.unblockCompany');

    Route::get('category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
    Route::post('category', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::post('category-affect/{id}', [\App\Http\Controllers\CategoryController::class, 'affect'])->name('category.affect');
    Route::get('category/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::delete('category/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');

    Route::get('sub_category', [\App\Http\Controllers\DetailTypeController::class, 'index'])->name('subCategory.index');
    Route::post('sub_category', [\App\Http\Controllers\DetailTypeController::class, 'store'])->name('subCategory.store');
    Route::get('sub_category/{id}', [\App\Http\Controllers\DetailTypeController::class, 'edit'])->name('subCategory.edit');
    Route::post('sub_category/{id}', [\App\Http\Controllers\DetailTypeController::class, 'update'])->name('subCategory.update');
    Route::delete('sub_category/{id}', [\App\Http\Controllers\DetailTypeController::class, 'destroy'])->name('subCategory.delete');

    Route::get('domain', [\App\Http\Controllers\DomainController::class, 'index'])->name('domain.index');
    Route::post('domain', [\App\Http\Controllers\DomainController::class, 'store'])->name('domain.store');
    Route::get('domain/{id}', [\App\Http\Controllers\DomainController::class, 'edit'])->name('domain.edit');
    Route::post('domain/{id}', [\App\Http\Controllers\DomainController::class, 'update'])->name('domain.update');
    Route::delete('domain/{id}', [\App\Http\Controllers\DomainController::class, 'destroy'])->name('domain.delete');

    Route::get('base', [\App\Http\Controllers\BaseController::class, 'index'])->name('base.index');
    Route::post('base', [\App\Http\Controllers\BaseController::class, 'store'])->name('base.store');
    Route::get('base/{id}', [\App\Http\Controllers\BaseController::class, 'edit'])->name('base.edit');
    Route::post('base/{id}', [\App\Http\Controllers\BaseController::class, 'update'])->name('base.update');
    Route::delete('base/{id}', [\App\Http\Controllers\BaseController::class, 'destroy'])->name('base.delete');

    Route::get('pack', [\App\Http\Controllers\PackController::class, 'index'])->name('pack.index');
    Route::post('pack', [\App\Http\Controllers\PackController::class, 'store'])->name('pack.store');
    Route::get('pack/{id}', [\App\Http\Controllers\PackController::class, 'edit'])->name('pack.edit');
    Route::post('pack/{id}', [\App\Http\Controllers\PackController::class, 'update'])->name('pack.update');
    Route::delete('pack/{id}', [\App\Http\Controllers\PackController::class, 'destroy'])->name('pack.delete');

    Route::get('accounting-product', [\App\Http\Controllers\IncomeExpenseController::class, 'index'])->name('accounting-product.index');
    Route::post('accounting-product', [\App\Http\Controllers\IncomeExpenseController::class, 'store'])->name('accounting-product.store');
    Route::get('accounting-product/{id}', [\App\Http\Controllers\IncomeExpenseController::class, 'edit'])->name('accounting-product.edit');
    Route::post('accounting-product/{id}', [\App\Http\Controllers\IncomeExpenseController::class, 'update'])->name('accounting-product.update');
    Route::delete('accounting-product/{id}', [\App\Http\Controllers\IncomeExpenseController::class, 'destroy'])->name('accounting-product.delete');

    Route::get('taxCenter', [\App\Http\Controllers\TaxCenterController::class, 'index'])->name('taxCenter.index');
    Route::post('taxCenter', [\App\Http\Controllers\TaxCenterController::class, 'store'])->name('taxCenter.store');
    Route::get('taxCenter/{id}', [\App\Http\Controllers\TaxCenterController::class, 'edit'])->name('taxCenter.edit');
    Route::post('taxCenter/{id}', [\App\Http\Controllers\TaxCenterController::class, 'update'])->name('taxCenter.update');
    Route::delete('taxCenter/{id}', [\App\Http\Controllers\TaxCenterController::class, 'destroy'])->name('taxCenter.delete');

    Route::get('principalActivity', [\App\Http\Controllers\PrincipalActivityController::class, 'index'])->name('typeAct.index');
    Route::post('principalActivity', [\App\Http\Controllers\PrincipalActivityController::class, 'store'])->name('typeAct.store');
    Route::get('principalActivity/{id}', [\App\Http\Controllers\PrincipalActivityController::class, 'edit'])->name('typeAct.edit');
    Route::post('principalActivity/{id}', [\App\Http\Controllers\PrincipalActivityController::class, 'update'])->name('typeAct.update');
    Route::delete('principalActivity/{id}', [\App\Http\Controllers\PrincipalActivityController::class, 'destroy'])->name('typeAct.delete');

    Route::get('type-impot', [\App\Http\Controllers\TypeImpotController::class, 'index'])->name('typeImpot.index');
    Route::post('type-impot', [\App\Http\Controllers\TypeImpotController::class, 'store'])->name('typeImpot.store');
    Route::get('type-impot/{id}', [\App\Http\Controllers\TypeImpotController::class, 'edit'])->name('typeImpot.edit');
    Route::post('type-impot/{id}', [\App\Http\Controllers\TypeImpotController::class, 'update'])->name('typeImpot.update');
    Route::delete('type-impot/{id}', [\App\Http\Controllers\TypeImpotController::class, 'destroy'])->name('typeImpot.delete');

    Route::get('type_company', [\App\Http\Controllers\TypeCompanyController::class, 'index'])->name('type.index');
    Route::post('type_company', [\App\Http\Controllers\TypeCompanyController::class, 'store'])->name('type.store');
    Route::get('type_company/{id}', [\App\Http\Controllers\TypeCompanyController::class, 'edit'])->name('type.edit');
    Route::post('type_company/{id}', [\App\Http\Controllers\TypeCompanyController::class, 'update'])->name('type.update');
    Route::delete('type_company/{id}', [\App\Http\Controllers\TypeCompanyController::class, 'destroy'])->name('type.delete');
});
