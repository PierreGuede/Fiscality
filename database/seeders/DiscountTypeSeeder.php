<?php
namespace Database\Seeders;

use App\Fiscality\TypeImpots\TypeImpot;
use App\Models\DiscountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiscountType::updateOrCreate(
            [
                'code'=>'NE'
            ],

            [
                'name'=>'Nouvelle Entreprise',
                'type_impot_id'=>TypeImpot::whereCode(TypeImpot::IS)->first('id')->id
            ]
        );

        DiscountType::updateOrCreate(
            [
                'code'=>'CGA'
            ],

            [
                'name'=>'Centre de gestion Adhérée (CGA)',
                'type_impot_id'=>TypeImpot::whereCode('is')->first('id')->id
            ]
        );

        DiscountType::updateOrCreate(
            [
                'code'=>'SU'
            ],

            [
                'name'=>'Start-Up',
                'type_impot_id'=>TypeImpot::whereCode('is')->first('id')->id
            ]
        );

        DiscountType::updateOrCreate(
            [
                'code'=>'EC'
            ],

            [
                'name'=>'Entreprise Conventionnée',
                'type_impot_id'=>TypeImpot::whereCode('is')->first('id')->id
            ]
        );


    }
}
