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
        Base::create([
            'name' => 'Benefice fiscal',
        ]);
        Base::create([
            'name' => 'Produits encaissables',
        ]);
        Base::create([
            'name' => 'Volume',
        ]);
        Base::create([
            'name' => 'Benefice d\'affaire',
        ]);
    }
}
