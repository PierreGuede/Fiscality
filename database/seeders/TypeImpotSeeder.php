<?php

namespace Database\Seeders;

use App\Fiscality\TaxCenters\TaxCenter;
use App\Fiscality\TypeImpots\TypeImpot;
use Illuminate\Database\Seeder;

class TypeImpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeImpot::create([
            'name' => 'IS',
            'code' => 'is',
        ]);
        TypeImpot::create([
            'name' => 'IBA',
            'code' => 'iba',
        ]);
        TypeImpot::create([
            'name' => 'IRCM sur charges non déductible',
            'code' => 'ircm_sur_charges_non_deductible',
        ]);
        TypeImpot::create([
            'name' => 'IRCM sur résulats net comptable',
            'code' => 'ircm_sur_resulats_net_comptable',
        ]);

        TaxCenter::create([
            'name' => 'Parakou',
            'address' => '9CF8+FRH Ecole, Rue 218, Cotonou',
            'code' => 'parakou',
        ]);
        TaxCenter::create([
            'name' => 'Lokossa',
            'address' => '9CF8+FRG Ecole, Rue 218, Cotonou',
            'code' => 'lokossa',
        ]);
        TaxCenter::create([
            'name' => 'Cotonou',
            'address' => '9CF8+FGH Ecole, Rue 218, Cotonou',
            'code' => 'cotonou',
        ]);
    }
}
