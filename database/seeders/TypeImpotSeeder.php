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
        TypeImpot::updateOrCreate([
            'code' => 'is',
        ], [
            'name' => 'Impôt sur les Sociétés',
        ]);

        TypeImpot::updateOrCreate([
            'code' => 'iba',
        ], [
            'name' => 'Impôt sur les Bénéficiaires d\'Affaires',
        ]);

        TypeImpot::updateOrCreate([
            'code' => 'ircm_sur_charges_non_deductible',
        ], [
            'name' => 'IRCM sur charges non déductible',
        ]);

        TypeImpot::updateOrCreate([
            'code' => 'ircm_sur_resulats_net_comptable',
        ], [
            'name' => 'IRCM sur résulats net comptable',
        ]);

        TaxCenter::updateOrCreate([
            'name' => 'Parakou',
            'address' => '9CF8+FRH Ecole, Rue 218, Cotonou',
            'code' => 'PARAKOU',
        ]);
        TaxCenter::updateOrCreate([
            'name' => 'Lokossa',
            'address' => '9CF8+FRG Ecole, Rue 218, Cotonou',
            'code' => 'LOKOSSA',
        ]);
        TaxCenter::updateOrCreate([
            'name' => 'Cotonou',
            'address' => '9CF8+FGH Ecole, Rue 218, Cotonou',
            'code' => 'COTONOU',
        ]);
    }
}
