<?php

namespace Database\Seeders;

use App\Fiscality\Packs\Pack;
use Illuminate\Database\Seeder;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pack::updateOrCreate(
            [
                'name' => 'bronze',
            ], [
                'name' => 'bronze',
                'description' => 'Lorem ',
                'max' => 3,
                'type' => 'cabinet',
            ]);
        Pack::updateOrCreate([
            'name' => 'or',
        ], [
            'name' => 'or',
            'description' => 'Lorem ',
            'max' => 6,
            'type' => 'cabinet',
        ]);
        Pack::updateOrCreate([
            'name' => 'diamant',
        ], [
            'name' => 'diamant',
            'description' => 'Lorem ',
            'max' => 9,
            'type' => 'cabinet',
        ]);
        Pack::updateOrCreate([
            'name' => 'pack pour soit',
        ], [
            'name' => 'pack pour soit',
            'description' => 'Lorem ',
            'max' => 1,
            'type' => 'enterprise',
        ]);
    }
}
