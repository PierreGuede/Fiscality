<?php

namespace Database\Seeders;

use App\Fiscality\TypeCompanies\TypeCompany;
use Illuminate\Database\Seeder;

class TypeCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeCompany::updateOrCreate([
            'code' => 'PM',
        ], [
            'name' => 'Personne morales (Sociétés) ',
        ]);
        TypeCompany::updateOrCreate([
            'code' => 'ES',
        ], [
            'name' => 'Etablissements stables des personnes morales',
        ]);
        TypeCompany::updateOrCreate([
            'code' => 'PP',
        ], [
            'name' => 'Personne physiques, Entreprise individuelle',
        ]);
    }
}
