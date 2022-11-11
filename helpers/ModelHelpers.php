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
     * @property float $total_incomes
     * @property float $total_expenses
     * @property float $ar_value
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
     *
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AccuredCharge query()
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
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization query()
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Amortization whereId($value)
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
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\DetailTypes\DetailType[] $detailType
     * @property-read int|null $detail_type_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\IMItems\IMItem[] $itemsIM
     * @property-read int|null $items_i_m_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Base newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Base newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Base query()
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
     * @property string $name
     * @property string $code
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
     * @property int $total
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
     * @property float $renseigned_commission
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
     * @property string $path
     * @property string $rccm
     * @property string $path_rccm
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
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereIsActive($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereIsConfirmed($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company wherePath($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company wherePathRccm($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Company whereRccm($value)
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

namespace App\Fiscality\Depreciations{
    /**
     * App\Fiscality\Depreciations\Depreciation
     *
     * @property int $id
     * @property string $category_imo
     * @property string $designation
     * @property string $dotation
     * @property int $amortization_id
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation query()
     * @method static \Illuminate\Database\Eloquent\Builder|Depreciation whereAmortizationId($value)
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
     * @property string $category_imo
     * @property string $designation
     * @property string $taux_use
     * @property string $taux_recommended
     * @property string $ecart
     * @property string $dotation
     * @property string $deductible_amortization
     * @property int $amortization_id
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Excess newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Excess newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Excess query()
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereAmortizationId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereCategoryImo($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereDeductibleAmortization($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereDesignation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereDotation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Excess whereEcart($value)
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
     * @property float $amount_reintegrated
     * @property float|null $interest_rate
     * @property float|null $maximum_rate
     * @property float|null $rate_surplus
     * @property int $financial_cost_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest query()
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereAmountReintegrated($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereFinancialCostId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereInterestRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereMaximumRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|FinancialCostInterest whereRateSurplus($value)
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
     * @property int $compte
     * @property string $designation
     * @property int $amount
     * @property int $general_cost_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     *
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereCompte($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereDesignation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereGeneralCostId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|GeneralCostDetail whereId($value)
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
     * @method static \Illuminate\Database\Eloquent\Builder|Pack whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Pack whereUpdatedAt($value)
     */
    class IdeHelperPack
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
     * @property string $path
     * @property string $rccm
     * @property string $path_rccm
     * @property string $born_day
     * @property int $user_id
     * @property string|null $deleted_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\User $user
     *
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser query()
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereBornDay($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereIfu($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser wherePath($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser wherePathRccm($value)
     * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereRccm($value)
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
     * @property float $amount
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
     * @property int $Account
     * @property string $designation
     * @property int $amount
     * @property int $turnover
     * @property float $deduction_limit
     * @property float $amount_reintegrated
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $company_id
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance query()
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereAccount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereAmount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereAmountReintegrated($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereDeductionLimit($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereDesignation($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Redevance whereId($value)
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
     * @property int $amortization_id
     * @property int $company_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Fiscality\Amortizations\Amortization $amortization
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle query()
     * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereAmortizationId($value)
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
     *
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution query()
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereCompanyId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|DonationGrantContribution whereId($value)
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
     * App\Models\OtherReintegration
     *
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|OtherReintegration query()
     * @mixin \Eloquent
     */
    class IdeHelperOtherReintegration
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
     * App\Models\User
     *
     * @property int $id
     * @property string $name
     * @property string $firstname
     * @property string $username
     * @property string|null $code
     * @property string $email
     * @property \Illuminate\Support\Carbon|null $email_verified_at
     * @property string $password
     * @property int|null $user_id
     * @property string|null $remember_token
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\Companies\Company[] $company
     * @property-read int|null $company_count
     * @property-read User|null $createdBy
     * @property-read \App\Fiscality\PackUsers\PackUser|null $myPack
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
     * @property-read int|null $notifications_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
     * @property-read int|null $permissions_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiscality\Companies\Company[] $personnel
     * @property-read int|null $personnel_count
     * @property-read \App\Fiscality\ProfileUsers\ProfileUser|null $profile
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
     * @property-read int|null $roles_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
     * @property-read int|null $tokens_count
     *
     * @method static \Database\Factories\UserFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
     * @method static \Illuminate\Database\Eloquent\Builder|User query()
     * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCode($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUserId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
     */
    class IdeHelperUser
    {
    }
}
