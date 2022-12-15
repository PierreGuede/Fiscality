<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */

namespace App\Fiscality\AccountingResults{
    /**
     * App\Fiscality\AccountingResults\AccountingResult
     *
     * @property int $id
     * @property int $company_id
     * @property string $total_incomes
     * @property string $total_expenses
     * @property string $ar_value
     * @property string $status
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult query()
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult whereArValue($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult whereStatus($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult whereTotalExpenses($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult whereTotalIncomes($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccountingResult whereUpdatedAt($value)
     */
    class IdeHelperAccountingResult
    {
    }
}

namespace App\Fiscality\AccuredCharges{
    /**
     * App\Fiscality\AccuredCharges\AccuredCharge
     *
     * @property int $id
     * @property string|null $compte
     * @property string $designation
     * @property string $type
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $company_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge query()
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge whereCompte($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge whereDesignation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge whereUpdatedAt($value)
     */
    class IdeHelperAccuredCharge
    {
    }
}

namespace App\Fiscality\AdvertisingGiftDetails{
    /**
     * App\Fiscality\AdvertisingGiftDetails\AdvertisingGiftDetail
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $name
     * @property string $amount
     * @property int $company_id
     * @property int $advertising_gift_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGiftDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGiftDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGiftDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGiftDetail whereAdvertisingGiftId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGiftDetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGiftDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGiftDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGiftDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGiftDetail whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGiftDetail whereUpdatedAt($value)
     */
    class IdeHelperAdvertisingGiftDetail
    {
    }
}

namespace App\Fiscality\AdvertisingGifts{
    /**
     * App\Fiscality\AdvertisingGifts\AdvertisingGift
     *
     * @property int $id
     * @property float $surplus_reintegrated
     * @property float $deduction_limit
     * @property string $total_amount
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $turnover
     *
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift query()
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift whereDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift whereSurplusReintegrated($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift whereTotalAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift whereTurnover($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AdvertisingGift whereUpdatedAt($value)
     */
    class IdeHelperAdvertisingGift
    {
    }
}

namespace App\Fiscality\AmortizationDetails{
    /**
     * App\Fiscality\AmortizationDetails\AmortizationDetails
     *
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationDetails newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationDetails newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationDetails query()
     */
    class IdeHelperAmortizationDetails
    {
    }
}

namespace App\Fiscality\Amortizations{
    /**
     * App\Fiscality\Amortizations\Amortization
     *
     * @property int $id
     * @property string $name
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization query()
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization whereUpdatedAt($value)
     */
    class IdeHelperAmortization
    {
    }
}

namespace App\Fiscality\AssistanceCosts{
    /**
     * App\Fiscality\AssistanceCosts\AssistanceCost
     *
     * @property int $id
     * @property float $fat_amount
     * @property float $general_cost
     * @property float $limit_deduction
     * @property float $reintegrate_amount
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost query()
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost whereFatAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost whereGeneralCost($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost whereLimitDeduction($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost whereReintegrateAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AssistanceCost whereUpdatedAt($value)
     */
    class IdeHelperAssistanceCost
    {
    }
}

namespace App\Fiscality\Bases{
    /**
     * App\Fiscality\Bases\Base
     *
     * @property int $id
     * @property string $name
     * @property string|null $deleted_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $code
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\DetailTypes\DetailType[] $detailType
     * @property-read int|null $detail_type_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\IMItems\IMItem[] $itemsIM
     * @property-read int|null $items_i_m_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Base newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Base newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Base query()
     * @method static \Illuminate\Database\Eloquent\Builder|Base whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Base whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Base whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Base whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Base whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Base whereUpdatedAt($value)
     */
    class IdeHelperBase
    {
    }
}

namespace App\Fiscality\Categories{
    /**
     * App\Fiscality\Categories\Category
     *
     * @property int $id
     * @property string $code
     * @property string $name
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\DetailTypes\DetailType[] $detailType
     * @property-read int|null $detail_type_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Category query()
     * @method static \Illuminate\Database\Eloquent\Builder|Category whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
     */
    class IdeHelperCategory
    {
    }
}

namespace App\Fiscality\Charges{
    /**
     * App\Fiscality\Charges\Charge
     *
     * @property int $id
     * @property string $account
     * @property string $name
     * @property string $code
     * @property float $amount
     * @property string|null $deleted_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Charge newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Charge newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Charge query()
     * @method static \Illuminate\Database\Eloquent\Builder|Charge whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Charge whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Charge whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Charge whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Charge whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Charge whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Charge whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Charge whereUpdatedAt($value)
     */
    class IdeHelperCharge
    {
    }
}

namespace App\Fiscality\CommissionOnPurchaseDetails{
    /**
     * App\Fiscality\CommissionOnPurchaseDetails\CommissionOnPurchaseDetail
     *
     * @property int $id
     * @property int $Account
     * @property string $designation
     * @property float $total
     * @property float $amount_commission
     * @property float $limit
     * @property float $no_deductible_amount
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $company_id
     * @property int $commission_on_purchase_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereAmountCommission($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereCommissionOnPurchaseId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereDesignation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereNoDeductibleAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereTotal($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchaseDetail whereUpdatedAt($value)
     */
    class IdeHelperCommissionOnPurchaseDetail
    {
    }
}

namespace App\Fiscality\CommissionOnPurchases{
    /**
     * App\Fiscality\CommissionOnPurchases\CommissionOnPurchase
     *
     * @property int $id
     * @property string $renseigned_commission
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchase newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchase newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchase query()
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchase whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchase whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchase whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchase whereRenseignedCommission($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CommissionOnPurchase whereUpdatedAt($value)
     */
    class IdeHelperCommissionOnPurchase
    {
    }
}

namespace App\Fiscality\Companies{
    /**
     * App\Fiscality\Companies\Company
     *
     * @property int $id
     * @property string $name
     * @property string $ifu
     * @property string $ifu_file
     * @property string $rccm
     * @property string $rccm_file
     * @property string $created_date
     * @property string $email
     * @property string $celphone
     * @property int $tax_center_id
     * @property int $type_company_id
     * @property int|null $domain_id
     * @property int|null $user_id
     * @property int|null $company_id
     * @property int $is_active
     * @property int $is_confirmed
     * @property string $status
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $logo
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\Categories\Category[] $category
     * @property-read int|null $category_count
     * @property-read \Illuminate\Database\Eloquent\Collection|Company[] $childrenCompany
     * @property-read int|null $children_company_count
     * @property-read Company|null $company
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\DetailTypes\DetailType[] $detailType
     * @property-read int|null $detail_type_count
     * @property-read \App\Fiscality\Domains\Domain|null $domain
     * @property-read \App\Fiscality\TaxCenters\TaxCenter $taxCenter
     * @property-read \App\Fiscality\TypeCompanies\TypeCompany $typeCompany
     * @property-read \App\Models\User|null $user
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Company query()
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereCelphone($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedDate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereDomainId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereIfu($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereIfuFile($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereIsActive($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereIsConfirmed($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereRccm($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereRccmFile($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereStatus($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereTaxCenterId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereTypeCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
     */
    class IdeHelperCompany
    {
    }
}

namespace App\Fiscality\CompanyAccesControl{
    /**
     * App\Fiscality\CompanyAccesControl\CompanyAccesControl
     *
     * @property int $id
     * @property int $user_id
     * @property int $company_id
     * @property int $is_disconnected
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyAccesControl newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyAccesControl newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyAccesControl query()
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyAccesControl whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyAccesControl whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyAccesControl whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyAccesControl whereIsDisconnected($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyAccesControl whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyAccesControl whereUserId($value)
     */
    class IdeHelperCompanyAccesControl
    {
    }
}

namespace App\Fiscality\DeductionDetails{
    /**
     * App\Fiscality\DeductionDetails\DeductionDetail
     *
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionDetail query()
     */
    class IdeHelperDeductionDetail
    {
    }
}

namespace App\Fiscality\Deductions{
    /**
     * App\Fiscality\Deductions\Deduction
     *
     * @property int $id
     * @property float $total_product_amount
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction query()
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereTotalProductAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereUpdatedAt($value)
     */
    class IdeHelperDeduction
    {
    }
}

namespace App\Fiscality\Depreciations{
    /**
     * App\Fiscality\Depreciations\Depreciation
     *
     * @property int $id
     * @property string $category_imo
     * @property string $designation
     * @property string $dotation
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation query()
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation whereCategoryImo($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation whereDesignation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation whereDotation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation whereUpdatedAt($value)
     */
    class IdeHelperDepreciation
    {
    }
}

namespace App\Fiscality\DetailTypes{
    /**
     * App\Fiscality\DetailTypes\DetailType
     *
     * @property int $id
     * @property string $name
     * @property string $code
     * @property int $category_id
     * @property int|null $base_id
     * @property int|null $type_impot_id
     * @property string|null $taux
     * @property string|null $description
     * @property string|null $article
     * @property string|null $deleted_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Fiscality\Bases\Base|null $base
     * @property-read \App\Fiscality\Categories\Category $category
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\Companies\Company[] $company
     * @property-read int|null $company_count
     * @property-read \App\Fiscality\TypeImpots\TypeImpot|null $typeImpot
     *
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType query()
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereArticle($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereBaseId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereCategoryId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereDescription($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereTaux($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereTypeImpotId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DetailType whereUpdatedAt($value)
     */
    class IdeHelperDetailType
    {
    }
}

namespace App\Fiscality\Domains{
    /**
     * App\Fiscality\Domains\Domain
     *
     * @property int $id
     * @property string $name
     * @property string $code
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\Companies\Company[] $company
     * @property-read int|null $company_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\PrincipalActivities\PrincipalActivity[] $principalActivity
     * @property-read int|null $principal_activity_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Domain newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Domain newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Domain query()
     * @method static \Illuminate\Database\Eloquent\Builder|Domain whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Domain whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Domain whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Domain whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Domain whereUpdatedAt($value)
     */
    class IdeHelperDomain
    {
    }
}

namespace App\Fiscality\Endowments{
    /**
     * App\Fiscality\Endowments\Endowment
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Endowment newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Endowment newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Endowment query()
     * @method static \Illuminate\Database\Eloquent\Builder|Endowment whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Endowment whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Endowment whereUpdatedAt($value)
     */
    class IdeHelperEndowment
    {
    }
}

namespace App\Fiscality\ExcessRents{
    /**
     * App\Fiscality\ExcessRents\ExcessRent
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $rent_amount
     * @property int $rental_period_year en jour
     * @property string $annual_deduction_limit
     * @property string $applicable_deduction_limit
     * @property string $amount_rent_reintegrated
     * @property int $company_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent query()
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent whereAmountRentReintegrated($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent whereAnnualDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent whereApplicableDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent whereRentAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent whereRentalPeriodYear($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessRent whereUpdatedAt($value)
     */
    class IdeHelperExcessRent
    {
    }
}

namespace App\Fiscality\Excesss{
    /**
     * App\Fiscality\Excesss\Excess
     *
     * @property int $id
     * @property string $taux_use
     * @property string $taux_recommended
     * @property string $ecart
     * @property string $dotation
     * @property string $deductible_amortization
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $excess_amortzation_category_item_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Excess newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Excess newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Excess query()
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereDeductibleAmortization($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereDotation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereEcart($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereExcessAmortzationCategoryItemId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereTauxRecommended($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereTauxUse($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereUpdatedAt($value)
     */
    class IdeHelperExcess
    {
    }
}

namespace App\Fiscality\FinancialCostConditions{
    /**
     * App\Fiscality\FinancialCostConditions\FinancialCostCondition
     *
     * @property int $id
     * @property float $amount_of_interest_recorded
     * @property float $non_deductible_interest_amount
     * @property float $deductible_interest_amount
     * @property float $profit_before_tax
     * @property float $interest_accrued
     * @property float $depreciation_and_amortization
     * @property float $allocations_to_provisions
     * @property float $calculation_base
     * @property float $deductibility_limit
     * @property float $amount_reintegrate
     * @property int $financial_cost_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition query()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereAllocationsToProvisions($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereAmountOfInterestRecorded($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereAmountReintegrate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereCalculationBase($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereDeductibilityLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereDeductibleInterestAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereDepreciationAndAmortization($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereFinancialCostId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereInterestAccrued($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereNonDeductibleInterestAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereProfitBeforeTax($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostCondition whereUpdatedAt($value)
     */
    class IdeHelperFinancialCostCondition
    {
    }
}

namespace App\Fiscality\FinancialCostInterests{
    /**
     * App\Fiscality\FinancialCostInterests\FinancialCostInterest
     *
     * @property int $id
     * @property string $amount_reintegrated
     * @property string|null $amount_contribution
     * @property string|null $amount_interest_recorded
     * @property string|null $interest_rate_charged
     * @property string|null $bceao_interest_rate_for_the_year
     * @property string|null $maximum_rate
     * @property string|null $rate_surplus
     * @property int $financial_cost_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $type
     *
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest query()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereAmountContribution($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereAmountInterestRecorded($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereAmountReintegrated($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereBceaoInterestRateForTheYear($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereFinancialCostId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereInterestRateCharged($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereMaximumRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereRateSurplus($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereUpdatedAt($value)
     */
    class IdeHelperFinancialCostInterest
    {
    }
}

namespace App\Fiscality\FinancialCosts{
    /**
     * App\Fiscality\FinancialCosts\FinancialCost
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $name
     * @property int $total_amount_reintegrated
     * @property int $interest_amount_reintegrated
     * @property int $condition_amount_reintegrated
     * @property int $company_id
     * @property string $date
     *
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost query()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost whereConditionAmountReintegrated($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost whereDate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost whereInterestAmountReintegrated($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost whereTotalAmountReintegrated($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCost whereUpdatedAt($value)
     */
    class IdeHelperFinancialCost
    {
    }
}

namespace App\Fiscality\GeneralCostDetails{
    /**
     * App\Fiscality\GeneralCostDetails\GeneralCostDetail
     *
     * @property int $id
     * @property int $account
     * @property string $name
     * @property int $amount
     * @property int $general_cost_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int|null $company_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereGeneralCostId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereUpdatedAt($value)
     */
    class IdeHelperGeneralCostDetail
    {
    }
}

namespace App\Fiscality\GeneralCosts{
    /**
     * App\Fiscality\GeneralCosts\GeneralCost
     *
     * @property int $id
     * @property float $total_amount
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCost newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCost newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCost query()
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCost whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCost whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCost whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCost whereTotalAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCost whereUpdatedAt($value)
     */
    class IdeHelperGeneralCost
    {
    }
}

namespace App\Fiscality\IMCalculationDetails{
    /**
     * App\Fiscality\IMCalculationDetails\IMCalculationDetail
     *
     * @property int $id
     * @property string $name
     * @property string $code
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculationDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculationDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculationDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculationDetail whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculationDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculationDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculationDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculationDetail whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculationDetail whereUpdatedAt($value)
     */
    class IdeHelperIMCalculationDetail
    {
    }
}

namespace App\Fiscality\IMCalculations{
    /**
     * App\Fiscality\IMCalculations\IMCalculation
     *
     * @property int $id
     * @property string $name
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation query()
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation whereUpdatedAt($value)
     */
    class IdeHelperIMCalculation
    {
    }
}

namespace App\Fiscality\IMCalculs{
    /**
     * App\Fiscality\IMCalculs\IMCalcul
     *
     * @property int $id
     * @property int $company_id
     * @property float $total_items
     * @property float $total_im
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalcul newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalcul newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalcul query()
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalcul whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalcul whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalcul whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalcul whereTotalIm($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalcul whereTotalItems($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMCalcul whereUpdatedAt($value)
     */
    class IdeHelperIMCalcul
    {
    }
}

namespace App\Fiscality\IMItems{
    /**
     * App\Fiscality\IMItems\IMItem
     *
     * @property int $id
     * @property string $name
     * @property int $base_id
     * @property string|null $deleted_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Fiscality\Bases\Base|null $bases
     *
     * @method static \Illuminate\Database\Eloquent\Builder|IMItem newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IMItem newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IMItem query()
     * @method static \Illuminate\Database\Eloquent\Builder|IMItem whereBaseId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMItem whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMItem whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMItem whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMItem whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IMItem whereUpdatedAt($value)
     */
    class IdeHelperIMItem
    {
    }
}

namespace App\Fiscality\IncomeExpenses{
    /**
     * App\Fiscality\IncomeExpenses\IncomeExpense
     *
     * @property int $id
     * @property string $account
     * @property string $name
     * @property string $type
     * @property string|null $deleted_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|IncomeExpense newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IncomeExpense newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IncomeExpense query()
     * @method static \Illuminate\Database\Eloquent\Builder|IncomeExpense whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IncomeExpense whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IncomeExpense whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IncomeExpense whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IncomeExpense whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IncomeExpense whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IncomeExpense whereUpdatedAt($value)
     */
    class IdeHelperIncomeExpense
    {
    }
}

namespace App\Fiscality\PackUsers{
    /**
     * App\Fiscality\PackUsers\PackUser
     *
     * @property int $id
     * @property int $user_id
     * @property int $pack_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Fiscality\Packs\Pack $packs
     * @property-read \App\Models\User $user
     *
     * @method static \Illuminate\Database\Eloquent\Builder|PackUser newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|PackUser newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|PackUser query()
     * @method static \Illuminate\Database\Eloquent\Builder|PackUser whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|PackUser whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|PackUser wherePackId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|PackUser whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|PackUser whereUserId($value)
     */
    class IdeHelperPackUser
    {
    }
}

namespace App\Fiscality\Packs{
    /**
     * App\Fiscality\Packs\Pack
     *
     * @property int $id
     * @property string $name
     * @property string|null $description
     * @property int $max
     * @property string $type
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $price
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\PackUsers\PackUser[] $theuser
     * @property-read int|null $theuser_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $user
     * @property-read int|null $user_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Pack newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Pack newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Pack query()
     * @method static \Illuminate\Database\Eloquent\Builder|Pack whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Pack whereDescription($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Pack whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Pack whereMax($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Pack whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Pack wherePrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Pack whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Pack whereUpdatedAt($value)
     */
    class IdeHelperPack
    {
    }
}

namespace App\Fiscality\PersonelExpenses{
    /**
     * App\Fiscality\PersonelExpenses\PersonnelExpense
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|PersonnelExpense newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|PersonnelExpense newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|PersonnelExpense query()
     * @method static \Illuminate\Database\Eloquent\Builder|PersonnelExpense whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|PersonnelExpense whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|PersonnelExpense whereUpdatedAt($value)
     */
    class IdeHelperPersonnelExpense
    {
    }
}

namespace App\Fiscality\PrincipalActivities{
    /**
     * App\Fiscality\PrincipalActivities\PrincipalActivity
     *
     * @property int $id
     * @property string $name
     * @property int|null $domain_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Fiscality\Domains\Domain|null $domain
     *
     * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity query()
     * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity whereDomainId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity whereUpdatedAt($value)
     */
    class IdeHelperPrincipalActivity
    {
    }
}

namespace App\Fiscality\ProfileUsers{
    /**
     * App\Fiscality\ProfileUsers\ProfileUser
     *
     * @property int $id
     * @property string $ifu
     * @property string $ifu_file
     * @property string $rccm
     * @property string $rccm_file
     * @property string $born_day
     * @property int $user_id
     * @property string|null $deleted_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $social_reason
     * @property string $celphone
     * @property-read \App\Models\User $user
     *
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser query()
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereBornDay($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereCelphone($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereIfu($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereIfuFile($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereRccm($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereRccmFile($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereSocialReason($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereUserId($value)
     */
    class IdeHelperProfileUser
    {
    }
}

namespace App\Fiscality\RADetails{
    /**
     * App\Fiscality\RADetails\RADetail
     *
     * @property int $id
     * @property string $account
     * @property string $name
     * @property string $amount
     * @property string $type
     * @property int $accounting_result_id
     * @property int $company_id
     * @property string $code
     * @property string|null $deleted_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereAccountingResultId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RADetail whereUpdatedAt($value)
     */
    class IdeHelperRADetail
    {
    }
}

namespace App\Fiscality\RedevanceDetails{
    /**
     * App\Fiscality\RedevanceDetails\RedevanceDetail
     *
     * @property int $id
     * @property int $account
     * @property string $designation
     * @property int $amount
     * @property int $redevance_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $company_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail whereDesignation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail whereRedevanceId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RedevanceDetail whereUpdatedAt($value)
     */
    class IdeHelperRedevanceDetail
    {
    }
}

namespace App\Fiscality\Redevances{
    /**
     * App\Fiscality\Redevances\Redevance
     *
     * @property int $id
     * @property string $total_renumeration
     * @property string $deduction_limit
     * @property string $amount_reintegrated
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $company_id
     * @property string $turnover
     * @property string $amount
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance query()
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereAmountReintegrated($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereTotalRenumeration($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereTurnover($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereUpdatedAt($value)
     */
    class IdeHelperRedevance
    {
    }
}

namespace App\Fiscality\StateDonations{
    /**
     * App\Fiscality\StateDonations\StateDonation
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $total_state_donation
     * @property string $surplus_state_donation
     *
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonation newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonation newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonation query()
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonation whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonation whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonation whereSurplusStateDonation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonation whereTotalStateDonation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonation whereUpdatedAt($value)
     */
    class IdeHelperStateDonation
    {
    }
}

namespace App\Fiscality\TaxBases{
    /**
     * App\Fiscality\TaxBases\TaxBase
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|TaxBase newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TaxBase newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TaxBase query()
     * @method static \Illuminate\Database\Eloquent\Builder|TaxBase whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TaxBase whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TaxBase whereUpdatedAt($value)
     */
    class IdeHelperTaxBase
    {
    }
}

namespace App\Fiscality\TaxCenters{
    /**
     * App\Fiscality\TaxCenters\TaxCenter
     *
     * @property int $id
     * @property string $name
     * @property string $address
     * @property string $code
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|TaxCenter newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TaxCenter newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TaxCenter query()
     * @method static \Illuminate\Database\Eloquent\Builder|TaxCenter whereAddress($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TaxCenter whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TaxCenter whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TaxCenter whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TaxCenter whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TaxCenter whereUpdatedAt($value)
     */
    class IdeHelperTaxCenter
    {
    }
}

namespace App\Fiscality\TypeCompanies{
    /**
     * App\Fiscality\TypeCompanies\TypeCompany
     *
     * @property int $id
     * @property string $name
     * @property string $code
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\Companies\Company[] $company
     * @property-read int|null $company_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\TypeImpots\TypeImpot[] $impot
     * @property-read int|null $impot_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany query()
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany whereUpdatedAt($value)
     */
    class IdeHelperTypeCompany
    {
    }
}

namespace App\Fiscality\TypeImpots{
    /**
     * App\Fiscality\TypeImpots\TypeImpot
     *
     * @property int $id
     * @property string $name
     * @property string $code
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\DetailTypes\DetailType[] $detailType
     * @property-read int|null $detail_type_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot query()
     * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot whereUpdatedAt($value)
     */
    class IdeHelperTypeImpot
    {
    }
}

namespace App\Fiscality\Vehicles{
    /**
     * App\Fiscality\Vehicles\Vehicle
     *
     * @property int $id
     * @property string $name
     * @property string $value
     * @property string $plafond
     * @property string $ecart
     * @property string $dotation
     * @property string $deductible_amortization
     * @property string $date
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Fiscality\Amortizations\Amortization|null $amortization
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle query()
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereDate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereDeductibleAmortization($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereDotation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereEcart($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle wherePlafond($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereValue($value)
     */
    class IdeHelperVehicle
    {
    }
}

namespace App\Models{
    /**
     * App\Models\AccuredChargeCompany
     *
     * @property int $id
     * @property string|null $compte
     * @property string $designation
     * @property string $type
     * @property int $amount
     * @property int|null $company_id
     * @property string $date
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany query()
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany whereCompte($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany whereDate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany whereDesignation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredChargeCompany whereUpdatedAt($value)
     */
    class IdeHelperAccuredChargeCompany
    {
    }
}

namespace App\Models{
    /**
     * App\Models\AmortizationSetting
     *
     * @property int $id
     * @property string $depreciation_base_limit
     * @property string $recommended_rate
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property \Illuminate\Support\Carbon|null $deleted_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting newQuery()
     * @method static \Illuminate\Database\Query\Builder|AmortizationSetting onlyTrashed()
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting query()
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting whereDepreciationBaseLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting whereRecommendedRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AmortizationSetting whereUserId($value)
     * @method static \Illuminate\Database\Query\Builder|AmortizationSetting withTrashed()
     * @method static \Illuminate\Database\Query\Builder|AmortizationSetting withoutTrashed()
     * @mixin \Eloquent
     */
    class IdeHelperAmortizationSetting
    {
    }
}

namespace App\Models{
    /**
     * App\Models\BusinessProfitTax
     *
     * @property int $id
     * @property string $total
     * @property string $type
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTax newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTax newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTax query()
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTax whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTax whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTax whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTax whereTotal($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTax whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTax whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTax whereUserId($value)
     * @mixin \Eloquent
     */
    class IdeHelperBusinessProfitTax
    {
    }
}

namespace App\Models{
    /**
     * App\Models\BusinessProfitTaxDetail
     *
     * @property int $id
     * @property int $account
     * @property string $name
     * @property string $amount
     * @property string $type
     * @property int $minimum_tax_id
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail whereMinimumTaxId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|BusinessProfitTaxDetail whereUserId($value)
     * @mixin \Eloquent
     */
    class IdeHelperBusinessProfitTaxDetail
    {
    }
}

namespace App\Models{
    /**
     * App\Models\CompanySetting
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting query()
     * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class IdeHelperCompanySetting
    {
    }
}

namespace App\Models{
    /**
     * App\Models\CompanyUser
     *
     * @property int $id
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser query()
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereUserId($value)
     * @mixin \Eloquent
     */
    class IdeHelperCompanyUser
    {
    }
}

namespace App\Models{
    /**
     * App\Models\CorporateTax
     *
     * @property int $id
     * @property string $value
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|CorporateTax newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CorporateTax newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CorporateTax query()
     * @method static \Illuminate\Database\Eloquent\Builder|CorporateTax whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CorporateTax whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CorporateTax whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CorporateTax whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CorporateTax whereUserId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CorporateTax whereValue($value)
     * @mixin \Eloquent
     */
    class IdeHelperCorporateTax
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Deduction
     *
     * @property int $id
     * @property string $reversals_provisions
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $total_financial_product
     * @property string $capital_gain
     * @property string $currency_transaction_change
     * @property string $total_deduction
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction query()
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereCapitalGain($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereCurrencyTransactionChange($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereReversalsProvisions($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereTotalDeduction($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereTotalFinancialProduct($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deduction whereUpdatedAt($value)
     */
    class IdeHelperDeduction
    {
    }
}

namespace App\Models{
    /**
     * App\Models\DeductionSetting
     *
     * @property int $id
     * @property string $rate_proceed_government
     * @property string $rcm_product_rate
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property \Illuminate\Support\Carbon|null $deleted_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting newQuery()
     * @method static \Illuminate\Database\Query\Builder|DeductionSetting onlyTrashed()
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting query()
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting whereRateProceedGovernment($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting whereRcmProductRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DeductionSetting whereUserId($value)
     * @method static \Illuminate\Database\Query\Builder|DeductionSetting withTrashed()
     * @method static \Illuminate\Database\Query\Builder|DeductionSetting withoutTrashed()
     * @mixin \Eloquent
     */
    class IdeHelperDeductionSetting
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Deficit
     *
     * @property int $id
     * @property string $amount
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Deficit newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Deficit newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Deficit query()
     * @method static \Illuminate\Database\Eloquent\Builder|Deficit whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deficit whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deficit whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deficit whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deficit whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Deficit whereUserId($value)
     * @mixin \Eloquent
     */
    class IdeHelperDeficit
    {
    }
}

namespace App\Models{
    /**
     * App\Models\DonationGiftDetail
     *
     * @property int $id
     * @property int $account
     * @property string $name
     * @property string $amount
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $donation_grant_contribution_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail whereDonationGrantContributionId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGiftDetail whereUpdatedAt($value)
     */
    class IdeHelperDonationGiftDetail
    {
    }
}

namespace App\Models{
    /**
     * App\Models\DonationGrantContribution
     *
     * @property int $id
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $turnover
     * @property string $thousandth_turnover
     * @property string $total_state_donation
     * @property string $surplus_state_donation
     * @property string $surplus_state
     * @property string $total_donation_gift
     * @property string $limit
     *
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution query()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereSurplusState($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereSurplusStateDonation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereThousandthTurnover($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereTotalDonationGift($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereTotalStateDonation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereTurnover($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereUpdatedAt($value)
     */
    class IdeHelperDonationGrantContribution
    {
    }
}

namespace App\Models{
    /**
     * App\Models\DonationsGift
     *
     * @property int $id
     * @property string $total_donation_gifts
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|DonationsGift newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationsGift newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationsGift query()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationsGift whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationsGift whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationsGift whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationsGift whereTotalDonationGifts($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationsGift whereUpdatedAt($value)
     */
    class IdeHelperDonationsGift
    {
    }
}

namespace App\Models{
    /**
     * App\Models\ExcessAmortzationCategory
     *
     * @property int $id
     * @property string $code
     * @property string $name
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategory newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategory newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategory query()
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategory whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategory whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategory whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategory whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategory whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class IdeHelperExcessAmortzationCategory
    {
    }
}

namespace App\Models{
    /**
     * App\Models\ExcessAmortzationCategoryItem
     *
     * @property int $id
     * @property string $code
     * @property string $name
     * @property string $rate
     * @property int $excess_amortzation_category_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategoryItem newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategoryItem newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategoryItem query()
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategoryItem whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategoryItem whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategoryItem whereExcessAmortzationCategoryId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategoryItem whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategoryItem whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategoryItem whereRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ExcessAmortzationCategoryItem whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class IdeHelperExcessAmortzationCategoryItem
    {
    }
}

namespace App\Models{
    /**
     * App\Models\FinancialProduct
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $total_other_product_rcm
     * @property string $total_income_securities_issued
     * @property string $total_financial_product_amount
     * @property int $company_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProduct newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProduct newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProduct query()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProduct whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProduct whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProduct whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProduct whereTotalFinancialProductAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProduct whereTotalIncomeSecuritiesIssued($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProduct whereTotalOtherProductRcm($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProduct whereUpdatedAt($value)
     */
    class IdeHelperFinancialProduct
    {
    }
}

namespace App\Models{
    /**
     * App\Models\FinancialProductDetail
     *
     * @property int $id
     * @property string $net_ircm_amount
     * @property string $rate
     * @property string $amount_deduct
     * @property string $type
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $company_id
     * @property int $financial_product_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail whereAmountDeduct($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail whereFinancialProductId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail whereNetIrcmAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail whereRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialProductDetail whereUpdatedAt($value)
     */
    class IdeHelperFinancialProductDetail
    {
    }
}

namespace App\Models{
    /**
     * App\Models\GuruAmortizationSetting
     *
     * @property int $id
     * @property string $depreciation_base_limit
     * @property string $recommended_rate
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string|null $deleted_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GuruAmortizationSetting newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruAmortizationSetting newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruAmortizationSetting query()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruAmortizationSetting whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruAmortizationSetting whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruAmortizationSetting whereDepreciationBaseLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruAmortizationSetting whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruAmortizationSetting whereRecommendedRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruAmortizationSetting whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class IdeHelperGuruAmortizationSetting
    {
    }
}

namespace App\Models{
    /**
     * App\Models\GuruDeductionSetting
     *
     * @property int $id
     * @property string $rate_proceed_government
     * @property string $rcm_product_rate
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property \Illuminate\Support\Carbon|null $deleted_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDeductionSetting newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDeductionSetting newQuery()
     * @method static \Illuminate\Database\Query\Builder|GuruDeductionSetting onlyTrashed()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDeductionSetting query()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDeductionSetting whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDeductionSetting whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDeductionSetting whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDeductionSetting whereRateProceedGovernment($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDeductionSetting whereRcmProductRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDeductionSetting whereUpdatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|GuruDeductionSetting withTrashed()
     * @method static \Illuminate\Database\Query\Builder|GuruDeductionSetting withoutTrashed()
     * @mixin \Eloquent
     */
    class IdeHelperGuruDeductionSetting
    {
    }
}

namespace App\Models{
    /**
     * App\Models\GuruDonationsGift
     *
     * @property int $id
     * @property int $account
     * @property string $name
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDonationsGift newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDonationsGift newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDonationsGift query()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDonationsGift whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDonationsGift whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDonationsGift whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDonationsGift whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruDonationsGift whereUpdatedAt($value)
     */
    class IdeHelperGuruDonationsGift
    {
    }
}

namespace App\Models{
    /**
     * App\Models\GuruMinimumTax
     *
     * @property int $id
     * @property int $account
     * @property string $name
     * @property string $type
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int|null $type_impot_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GuruMinimumTax newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruMinimumTax newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruMinimumTax query()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruMinimumTax whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruMinimumTax whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruMinimumTax whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruMinimumTax whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruMinimumTax whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruMinimumTax whereTypeImpotId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruMinimumTax whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class IdeHelperGuruMinimumTax
    {
    }
}

namespace App\Models{
    /**
     * App\Models\GuruOtherReintegrationSetting
     *
     * @property string $bceao_interest_rate
     * @property string $minimum_rate
     * @property string $rate_deductibility_limit
     * @property string $commission_on_purchase_deduction_limit
     * @property string $redevance_deduction_rate_limit
     * @property string $assistance_cost_deduction_rate_limit
     * @property string $state_donation_limit
     * @property string $state_donation_rate_thousandth
     * @property string $advertising_gifts_deduction_limit
     * @property string $excess_rent_applicable_deduction_limit
     * @property string $annual_deduction_limit
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string|null $deleted_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting query()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereAdvertisingGiftsDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereAnnualDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereAssistanceCostDeductionRateLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereBceaoInterestRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereCommissionOnPurchaseDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereExcessRentApplicableDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereMinimumRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereRateDeductibilityLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereRedevanceDeductionRateLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereStateDonationLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereStateDonationRateThousandth($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruOtherReintegrationSetting whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class IdeHelperGuruOtherReintegrationSetting
    {
    }
}

namespace App\Models{
    /**
     * App\Models\GuruRedevance
     *
     * @property int $id
     * @property int $account
     * @property string $designation
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GuruRedevance newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruRedevance newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruRedevance query()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruRedevance whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruRedevance whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruRedevance whereDesignation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruRedevance whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruRedevance whereUpdatedAt($value)
     */
    class IdeHelperGuruRedevance
    {
    }
}

namespace App\Models{
    /**
     * App\Models\GuruSetting
     *
     * @property int $id
     * @property string $state_donation_limit
     * @property string $annual_deduction_limit
     * @property string $state_prorata_deduction_RCM
     * @property string $limit_deduction_rate
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GuruSetting newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruSetting newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruSetting query()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruSetting whereAnnualDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruSetting whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruSetting whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruSetting whereLimitDeductionRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruSetting whereStateDonationLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruSetting whereStateProrataDeductionRCM($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruSetting whereUpdatedAt($value)
     */
    class IdeHelperGuruSetting
    {
    }
}

namespace App\Models{
    /**
     * App\Models\GuruStateDonationDetail
     *
     * @property int $id
     * @property string $name
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $account
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GuruStateDonationDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruStateDonationDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruStateDonationDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|GuruStateDonationDetail whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruStateDonationDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruStateDonationDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruStateDonationDetail whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GuruStateDonationDetail whereUpdatedAt($value)
     */
    class IdeHelperGuruStateDonationDetail
    {
    }
}

namespace App\Models{
    /**
     * App\Models\HeadOfficeCost
     *
     * @property int $id
     * @property int $company_id
     * @property string $account_result
     * @property string $total_reintegration
     * @property string $total_deduction
     * @property string $taxable_income_before_restatement_head_office_costs
     * @property string $basis_calculating_deduction_limit
     * @property string $deductible_head_office_costs
     * @property string $non_deductible_head_office_costs
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost query()
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereAccountResult($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereBasisCalculatingDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereDeductibleHeadOfficeCosts($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereNonDeductibleHeadOfficeCosts($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereTaxableIncomeBeforeRestatementHeadOfficeCosts($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereTotalDeduction($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereTotalReintegration($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCost whereUpdatedAt($value)
     */
    class IdeHelperHeadOfficeCost
    {
    }
}

namespace App\Models{
    /**
     * App\Models\HeadOfficeCostDetail
     *
     * @property int $id
     * @property int $account
     * @property string $name
     * @property float $amount
     * @property int $company_id
     * @property int $head_office_cost_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail whereHeadOfficeCostId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|HeadOfficeCostDetail whereUpdatedAt($value)
     */
    class IdeHelperHeadOfficeCostDetail
    {
    }
}

namespace App\Models{
    /**
     * App\Models\IRCMOnExpense
     *
     * @property int $id
     * @property string $total
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpense newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpense newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpense query()
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpense whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpense whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpense whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpense whereTotal($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpense whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpense whereUserId($value)
     * @mixin \Eloquent
     */
    class IdeHelperIRCMOnExpense
    {
    }
}

namespace App\Models{
    /**
     * App\Models\IRCMOnExpenseDetail
     *
     * @property int $id
     * @property string $field
     * @property string $amount
     * @property int $is_selected
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail whereField($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail whereIsSelected($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|IRCMOnExpenseDetail whereUserId($value)
     * @mixin \Eloquent
     */
    class IdeHelperIRCMOnExpenseDetail
    {
    }
}

namespace App\Models{
    /**
     * App\Models\MinimumTax
     *
     * @property int $id
     * @property string $total
     * @property string $type
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $type_impot_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax query()
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax whereTotal($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax whereTypeImpotId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTax whereUserId($value)
     * @mixin \Eloquent
     */
    class IdeHelperMinimumTax
    {
    }
}

namespace App\Models{
    /**
     * App\Models\MinimumTaxDetail
     *
     * @property int $id
     * @property int $account
     * @property string $name
     * @property string $amount
     * @property string $type
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int|null $type_impot_id
     * @property int|null $minimum_tax_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereMinimumTaxId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereTypeImpotId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|MinimumTaxDetail whereUserId($value)
     * @mixin \Eloquent
     */
    class IdeHelperMinimumTaxDetail
    {
    }
}

namespace App\Models{
    /**
     * App\Models\OtherReintegration
     *
     * @property int $id
     * @property string $expense_not_related
     * @property string $unjustfified_expense
     * @property string $remuneration_not_subject_withholding_tax
     * @property string $financial_cost
     * @property string $commission_on_purchase
     * @property string $redevance
     * @property string $accountind_financial_technical_assistance_costs
     * @property string $donation_grant_contribution
     * @property string $advertising_gift
     * @property string $sumptuary_expenses
     * @property string $occult_remuneration
     * @property string $motor_vehicle_tax
     * @property string $income_tax
     * @property string $fines_penalities
     * @property string $past_assets
     * @property string $other_non_deductible_expense
     * @property string $variation_conversation_gap
     * @property string $excess_rent
     * @property string $other_non_deductible_expenses
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $commission_insurance_broker
     * @property string $interest_paid
     * @property string $total_amount
     *
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration query()
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereAccountindFinancialTechnicalAssistanceCosts($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereAdvertisingGift($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereCommissionInsuranceBroker($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereCommissionOnPurchase($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereDonationGrantContribution($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereExcessRent($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereExpenseNotRelated($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereFinancialCost($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereFinesPenalities($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereIncomeTax($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereInterestPaid($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereMotorVehicleTax($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereOccultRemuneration($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereOtherNonDeductibleExpense($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereOtherNonDeductibleExpenses($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration wherePastAssets($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereRedevance($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereRemunerationNotSubjectWithholdingTax($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereSumptuaryExpenses($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereTotalAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereUnjustfifiedExpense($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration whereVariationConversationGap($value)
     */
    class IdeHelperOtherReintegration
    {
    }
}

namespace App\Models{
    /**
     * App\Models\OtherReintegrationSetting
     *
     * @property int $id
     * @property string $bceao_interest_rate
     * @property string $minimum_rate
     * @property string $rate_deductibility_limit
     * @property string $commission_on_purchase_deduction_limit
     * @property string $redevance_deduction_rate_limit
     * @property string $assistance_cost_deduction_rate_limit
     * @property string $state_donation_limit
     * @property string $state_donation_rate_thousandth
     * @property string $advertising_gifts_deduction_limit
     * @property string $excess_rent_applicable_deduction_limit
     * @property string $annual_deduction_limit
     * @property int $company_id
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property \Illuminate\Support\Carbon|null $deleted_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting newQuery()
     * @method static \Illuminate\Database\Query\Builder|OtherReintegrationSetting onlyTrashed()
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting query()
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereAdvertisingGiftsDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereAnnualDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereAssistanceCostDeductionRateLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereBceaoInterestRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereCommissionOnPurchaseDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereExcessRentApplicableDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereMinimumRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereRateDeductibilityLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereRedevanceDeductionRateLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereStateDonationLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereStateDonationRateThousandth($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegrationSetting whereUserId($value)
     * @method static \Illuminate\Database\Query\Builder|OtherReintegrationSetting withTrashed()
     * @method static \Illuminate\Database\Query\Builder|OtherReintegrationSetting withoutTrashed()
     * @mixin \Eloquent
     */
    class IdeHelperOtherReintegrationSetting
    {
    }
}

namespace App\Models{
    /**
     * App\Models\RealTax
     *
     * @property int $id
     * @property string $value
     * @property int $company_id
     * @property int $user_id
     * @property int $corporate_tax_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|RealTax newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RealTax newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RealTax query()
     * @method static \Illuminate\Database\Eloquent\Builder|RealTax whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RealTax whereCorporateTaxId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RealTax whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RealTax whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RealTax whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RealTax whereUserId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|RealTax whereValue($value)
     * @mixin \Eloquent
     */
    class IdeHelperRealTax
    {
    }
}

namespace App\Models{
    /**
     * App\Models\StateDonationDetail
     *
     * @property int $id
     * @property string $name
     * @property string $amount
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $company_id
     * @property int $donation_grant_contribution_id
     * @property int $account
     *
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail whereDonationGrantContributionId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|StateDonationDetail whereUpdatedAt($value)
     */
    class IdeHelperStateDonationDetail
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Subscription
     *
     * @property int $id
     * @property int $user_id
     * @property int $pack_id
     * @property string $ref_payment
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Fiscality\Packs\Pack $packs
     * @property-read \App\Models\User $user
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Subscription newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Subscription newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Subscription query()
     * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Subscription wherePackId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereRefPayment($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereUserId($value)
     */
    class IdeHelperSubscription
    {
    }
}

namespace App\Models{
    /**
     * App\Models\TemporaryFile
     *
     * @property int $id
     * @property string $folder
     * @property string $filename
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile query()
     * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile whereFilename($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile whereFolder($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile whereUpdatedAt($value)
     */
    class IdeHelperTemporaryFile
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Town
     *
     * @property int $id
     * @property string $name
     * @property string $code
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Town newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Town newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Town query()
     * @method static \Illuminate\Database\Eloquent\Builder|Town whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Town whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Town whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Town whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Town whereUpdatedAt($value)
     */
    class IdeHelperTown
    {
    }
}

namespace App\Models{
    /**
     * App\Models\TypeCompanyTypeImpot
     *
     * @property int $id
     * @property int $type_company_id
     * @property int $type_impot_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompanyTypeImpot newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompanyTypeImpot newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompanyTypeImpot query()
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompanyTypeImpot whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompanyTypeImpot whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompanyTypeImpot whereTypeCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompanyTypeImpot whereTypeImpotId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|TypeCompanyTypeImpot whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class IdeHelperTypeCompanyTypeImpot
    {
    }
}

namespace App\Models{
    /**
     * App\Models\User
     *
     * @property int $id
     * @property string $name
     * @property string $firstname
     * @property string $username
     * @property string $email
     * @property \Illuminate\Support\Carbon|null $email_verified_at
     * @property string $password
     * @property int|null $user_id
     * @property string|null $remember_token
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string|null $two_factor_code
     * @property \Illuminate\Support\Carbon|null $two_factor_expires_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\Companies\Company[] $company
     * @property-read int|null $company_count
     * @property-read User|null $createdBy
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
     * @property-read int|null $notifications_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
     * @property-read int|null $permissions_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\Companies\Company[] $personnel
     * @property-read int|null $personnel_count
     * @property-read \App\Fiscality\ProfileUsers\ProfileUser|null $profile
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
     * @property-read int|null $roles_count
     * @property-read \App\Models\Subscription|null $subscription
     * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
     * @property-read int|null $tokens_count
     * @property-read \App\Models\UserSetting|null $userSetting
     *
     * @method static \Database\Factories\UserFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
     * @method static \Illuminate\Database\Eloquent\Builder|User query()
     * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorExpiresAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUserId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
     */
    class IdeHelperUser
    {
    }
}

namespace App\Models{
    /**
     * App\Models\UserSetting
     *
     * @property int $id
     * @property int $email_notification
     * @property int $sms_notification
     * @property int $whatsapp_notification
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|UserSetting newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|UserSetting newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|UserSetting query()
     * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereEmailNotification($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereSmsNotification($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereUserId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereWhatsappNotification($value)
     * @mixin \Eloquent
     */
    class IdeHelperUserSetting
    {
    }
}
