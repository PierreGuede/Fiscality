<?php

namespace Database\Seeders;

use App\Models\ExcessAmortzationCategory;
use Illuminate\Database\Seeder;

class ExcessAmortzationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExcessAmortzationCategory::upsert([
            [
                'code' => ExcessAmortzationCategory::FIRST,
                'name' => 'Catégorie 1',
            ],
            [
                'code' => ExcessAmortzationCategory::SECOND,
                'name' => 'Catégorie 2',
            ],
        ], ['code']);
    }
}
