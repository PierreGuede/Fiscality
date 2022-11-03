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
	class IdeHelperAccountingResult {}
}

namespace App\Fiscality\AmortizationDetails{
/**
 * App\Fiscality\AmortizationDetails\AmortizationDetails
 *
 * @method static \Illuminate\Database\Eloquent\Builder|AmortizationDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AmortizationDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AmortizationDetails query()
 */
	class IdeHelperAmortizationDetails {}
}

namespace App\Fiscality\Amortizations{
/**
 * App\Fiscality\Amortizations\Amortization
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Amortization newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Amortization newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Amortization query()
 * @method static \Illuminate\Database\Eloquent\Builder|Amortization whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amortization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amortization whereUpdatedAt($value)
 */
	class IdeHelperAmortization {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|Base newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Base newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Base query()
 * @method static \Illuminate\Database\Eloquent\Builder|Base whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Base whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Base whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Base whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Base whereUpdatedAt($value)
 */
	class IdeHelperBase {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class IdeHelperCategory {}
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
	class IdeHelperCharge {}
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
	class IdeHelperCompany {}
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
 * @mixin \Eloquent
 */
	class IdeHelperDepreciation {}
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
	class IdeHelperDetailType {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|Domain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain query()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereUpdatedAt($value)
 */
	class IdeHelperDomain {}
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
 * @mixin \Eloquent
 */
	class IdeHelperExcess {}
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
	class IdeHelperIMCalculationDetail {}
}

namespace App\Fiscality\IMCalculations{
/**
 * App\Fiscality\IMCalculations\IMCalculation
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation query()
 * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IMCalculation whereUpdatedAt($value)
 */
	class IdeHelperIMCalculation {}
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
	class IdeHelperIMCalcul {}
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
	class IdeHelperIMItem {}
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
	class IdeHelperIncomeExpense {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|PackUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackUser wherePackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackUser whereUserId($value)
 */
	class IdeHelperPackUser {}
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
	class IdeHelperPack {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity whereDomainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrincipalActivity whereUpdatedAt($value)
 */
	class IdeHelperPrincipalActivity {}
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
	class IdeHelperProfileUser {}
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
	class IdeHelperRADetail {}
}

namespace App\Fiscality\TaxBases{
/**
 * App\Fiscality\TaxBases\TaxBase
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TaxBase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxBase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxBase query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxBase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxBase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxBase whereUpdatedAt($value)
 */
	class IdeHelperTaxBase {}
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
	class IdeHelperTaxCenter {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCompany whereUpdatedAt($value)
 */
	class IdeHelperTypeCompany {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeImpot whereUpdatedAt($value)
 */
	class IdeHelperTypeImpot {}
}

namespace App\Fiscality\Vehicles{
/**
 * App\Fiscality\Vehicles\Vehicle
 *
 * @property-read \App\Fiscality\Amortizations\Amortization $amortization
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle query()
 * @mixin \Eloquent
 */
	class IdeHelperVehicle {}
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
	class IdeHelperUser {}
}

