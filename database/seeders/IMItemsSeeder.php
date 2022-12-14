<?php

namespace Database\Seeders;

use App\Fiscality\IMItems\IMItem;
use Illuminate\Database\Seeder;

class IMItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IMItem::upsert([
            [
                'name' => 'Impot 1',
                'base_id' => 2,
            ],
            [
                'name' => 'Impot 2',
                'base_id' => 2,
            ],
            [
                'name' => 'Impot 3',
                'base_id' => 2,
            ],
            [
                'name' => 'Impot 4',
                'base_id' => 2,
            ],
            [
                'name' => 'Impot 5',
                'base_id' => 2,
            ],
        ], ['name']);
    }
}
