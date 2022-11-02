<?php

namespace Database\Seeders;

use App\Fiscality\Domains\Domain;
use App\Fiscality\PrincipalActivities\PrincipalActivity;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domain::create([
            'name' => 'Technologie',
            'code' => 'Technologie',
        ]);
        Domain::create([
            'name' => 'Banque et assurance',
            'code' => 'Banque_et_assurance',
        ]);
        Domain::create([
            'name' => 'BTP et Matériaux de construction',
            'code' => 'BTP_et_Matériaux_de_construction',
        ]);
        Domain::create([
            'name' => 'Chimie et para-Chimie',
            'code' => 'Chimie_et_para-Chimie',
        ]);
        Domain::create([
            'name' => 'Niveaux',
            'code' => 'Niveaux',
        ]);

        PrincipalActivity::create([
            'name' => 'Type d\'activité 1',
            'domain_id' => 1,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 2',
            'domain_id' => 1,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 3',
            'domain_id' => 1,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 4',
            'domain_id' => 2,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 5',
            'domain_id' => 2,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 6',
            'domain_id' => 2,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 7',
            'domain_id' => 3,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 8',
            'domain_id' => 3,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 9',
            'domain_id' => 3,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 10',
            'domain_id' => 4,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 11',
            'domain_id' => 4,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 12',
            'domain_id' => 4,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 13',
            'domain_id' => 5,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 14',
            'domain_id' => 5,
        ]);
        PrincipalActivity::create([
            'name' => 'Type d\'activité 15',
            'domain_id' => 5,
        ]);
    }
}
