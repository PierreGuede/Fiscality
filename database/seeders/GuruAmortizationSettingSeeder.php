<?php

namespace Database\Seeders;

use App\Models\GuruAmortizationSetting;
use Illuminate\Database\Seeder;

class GuruAmortizationSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exist = GuruAmortizationSetting::first();

        if (is_null($exist)) {
            GuruAmortizationSetting::create([
                'depreciation_base_limit' => 4,
                'recommended_rate' => 6,
            ]);
        }
    }
}
