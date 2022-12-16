<?php

namespace Database\Seeders;

use App\Models\ApplicableDiscount;
use App\Models\DiscountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicableDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicableDiscount::updateOrCreate(
            [
                'code'=>ApplicableDiscount::FIRST_YEAR_RATE_NE
            ],
            [
                'rate'=>25,
                'applicable_year'=> ApplicableDiscount::FIRST_YEAR,
                'discount_type_id'=>DiscountType::whereCode(DiscountType::NOUVELLE_ENTREPRISE)->first('id')->id
            ]
        );

        ApplicableDiscount::updateOrCreate(
            [
                'code'=>ApplicableDiscount::SECOND_YEAR_RATE_NE
            ],
            [
                'rate'=>25,
                'applicable_year'=> ApplicableDiscount::SECOND_YEAR,
                'discount_type_id'=>DiscountType::whereCode(DiscountType::NOUVELLE_ENTREPRISE)->first('id')->id
            ]
        );

        ApplicableDiscount::updateOrCreate(
            [
                'code'=>ApplicableDiscount::THIRD_YEAR_RATE_NE
            ],
            [
                'rate'=>50,
                'applicable_year'=> ApplicableDiscount::THIRD_YEAR,
                'discount_type_id'=>DiscountType::whereCode(DiscountType::NOUVELLE_ENTREPRISE)->first('id')->id
            ]
        );

        ApplicableDiscount::updateOrCreate(
            [
                'code'=>ApplicableDiscount::FIRST_YEAR_RATE_CGA
            ],
            [
                'rate'=>40,
                'applicable_year'=> ApplicableDiscount::FIRST_YEAR,
                'discount_type_id'=>DiscountType::whereCode(DiscountType::CGA)->first('id')->id
            ]
        );

        ApplicableDiscount::updateOrCreate(
            [
                'code'=>ApplicableDiscount::SECOND_YEAR_RATE_CGA
            ],
            [
                'rate'=>40,
                'applicable_year'=> ApplicableDiscount::SECOND_YEAR,
                'discount_type_id'=>DiscountType::whereCode(DiscountType::CGA)->first('id')->id
            ]
        );

        ApplicableDiscount::updateOrCreate(
            [
                'code'=>ApplicableDiscount::THIRD_YEAR_RATE_CGA
            ],
            [
                'rate'=>40,
                'applicable_year'=> ApplicableDiscount::THIRD_YEAR,
                'discount_type_id'=>DiscountType::whereCode(DiscountType::CGA)->first('id')->id
            ]
        );

        ApplicableDiscount::updateOrCreate(
            [
                'code'=>ApplicableDiscount::FIRST_YEAR_RATE_SU
            ],
            [
                'rate'=>100,
                'applicable_year'=> ApplicableDiscount::FIRST_YEAR,
                'discount_type_id'=>DiscountType::whereCode(DiscountType::START_UP)->first('id')->id
            ]
        );

        ApplicableDiscount::updateOrCreate(
            [
                'code'=>ApplicableDiscount::SECOND_YEAR_RATE_SU
            ],
            [
                'rate'=>100,
                'applicable_year'=> ApplicableDiscount::SECOND_YEAR,
                'discount_type_id'=>DiscountType::whereCode(DiscountType::START_UP)->first('id')->id
            ]
        );

        ApplicableDiscount::updateOrCreate(
            [
                'code'=>ApplicableDiscount::THIRD_YEAR_RATE_SU
            ],
            [
                'rate'=>100,
                'applicable_year'=> ApplicableDiscount::THIRD_YEAR,
                'discount_type_id'=>DiscountType::whereCode(DiscountType::START_UP)->first('id')->id
            ]
        );


    }
}
