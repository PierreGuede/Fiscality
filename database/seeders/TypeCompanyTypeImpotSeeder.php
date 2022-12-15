<?php

namespace Database\Seeders;

use App\Models\TypeCompanyTypeImpot;
use Illuminate\Database\Seeder;

class TypeCompanyTypeImpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        2 - Personnes morales
        TypeCompanyTypeImpot::updateOrCreate([
            'type_company_id' => 1,
            'type_impot_id' => 1,
        ]);
        TypeCompanyTypeImpot::updateOrCreate([
            'type_company_id' => 1,
            'type_impot_id' => 3,
        ]);

        TypeCompanyTypeImpot::updateOrCreate([
            'type_company_id' => 2,
            'type_impot_id' => 3,
        ]);

        //        3 - Etablissement stable
        TypeCompanyTypeImpot::updateOrCreate([
            'type_company_id' => 2,
            'type_impot_id' => 1,
        ]);

        TypeCompanyTypeImpot::updateOrCreate([
            'type_company_id' => 2,
            'type_impot_id' => 3,
        ]);

        TypeCompanyTypeImpot::updateOrCreate([
            'type_company_id' => 2,
            'type_impot_id' => 4,
        ]);

        //        4 - Personne physique
        TypeCompanyTypeImpot::updateOrCreate([
            'type_company_id' => 3,
            'type_impot_id' => 2,
        ]);
    }
}
