<?php

namespace Database\Seeders;

use App\Fiscality\Bases\Base;
use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Base::updateOrCreate([
            'code' => 'BF',
        ], [
            'name' => 'Benefice fiscal',
        ]);
        Base::updateOrCreate([
            'code' => 'PE',
        ], [
            'name' => 'Produits encaissables',
        ]);
        Base::updateOrCreate([
            'code' => 'VO',
        ], [
            'name' => 'Volume',
        ]);
        Base::updateOrCreate([
            'code' => 'BA',
        ], [
            'name' => 'Benefice d\'affaire',
        ]);
    }
}
