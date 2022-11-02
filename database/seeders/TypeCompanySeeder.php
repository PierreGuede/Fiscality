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
        TypeCompany::create([
            'name' => 'Personne concernée',
            'code' => '313600',
        ]);
        TypeCompany::create([
            'name' => 'Personne morales',
            'code' => '813723',
        ]);
        TypeCompany::create([
            'name' => 'Etablissement stable',
            'code' => '395617',
        ]);
        TypeCompany::create([
            'name' => 'Personne physique',
            'code' => '504536',
        ]);
    }
}
