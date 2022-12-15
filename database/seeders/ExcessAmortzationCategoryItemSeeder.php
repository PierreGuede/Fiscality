<?php

namespace Database\Seeders;

use App\Models\ExcessAmortzationCategory;
use App\Models\ExcessAmortzationCategoryItem;
use Illuminate\Database\Seeder;

class ExcessAmortzationCategoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first = ExcessAmortzationCategory::whereCode(ExcessAmortzationCategory::FIRST)->first();
        $second = ExcessAmortzationCategory::whereCode(ExcessAmortzationCategory::SECOND)->first();

        ExcessAmortzationCategoryItem::upsert([
            [
                'code' => 'FIRST_ITEM',
                'name' => 'Premier items',
                'rate' => 10,
                'excess_amortzation_category_id' => $first->id,
            ],
            [
                'code' => 'SECOND_ITEM',
                'name' => 'Second items',
                'rate' => 20,
                'excess_amortzation_category_id' => $second->id,
            ],
            [
                'code' => 'THIRD_ITEM',
                'name' => 'Troisième items',
                'rate' => 30,
                'excess_amortzation_category_id' => $second->id,
            ],

        ], ['code']);
    }
}
