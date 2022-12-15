<?php

namespace Database\Seeders;

use App\Models\GuruDeductionSetting;
use Illuminate\Database\Seeder;

class GuruDeductionSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exist = GuruDeductionSetting::first();

        if (is_null($exist)) {
            GuruDeductionSetting::create([
                'rate_proceed_government' => 100,
                'rcm_product_rate' => 70,
            ]);
        }
    }
}
