<?php

namespace Database\Seeders;

use App\Models\GuruOtherReintegrationSetting;
use Illuminate\Database\Seeder;

class GuruOtherReintegrationSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exist = GuruOtherReintegrationSetting::first();

        if (is_null($exist)) {
            GuruOtherReintegrationSetting::create([
                'bceao_interest_rate' => 4,
                'minimum_rate' => 3,
                'rate_deductibility_limit' => 30,
                'commission_on_purchase_deduction_limit' => 5,
                'redevance_deduction_rate_limit' => 5,

                'assistance_cost_deduction_rate_limit' => 10, // C'était à
                'state_donation_limit' => 25_000_000,
                'state_donation_rate_thousandth' => 0.001, // 1/1000
                'advertising_gifts_deduction_limit' => 0.003, // 3/1000
                'excess_rent_applicable_deduction_limit' => 365,
                'annual_deduction_limit' => 6_250_000,
            ]);
        }
//        'bceao_interest_rate',
//        'minimum_rate',
//        'rate_deductibility_limit',
//        'commission_on_purchase',
//        'redevance_deduction_rate_limit',
//        'assistance_cost_deduction_rate_limit',
//        'state_donation_limit',
//        'state_donation_rate_thousandth',
//        'advertising_gifts_deduction_limit',
//        'excess_rent_applicable_deduction_limit',
//        'annual_deduction_limit',
    }
}
