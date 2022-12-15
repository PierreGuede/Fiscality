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
        Domain::updateOrCreate(
            [
                'code' => 'Technologie',
            ], [
                'name' => 'Technologie',
            ]);
        Domain::updateOrCreate(
            [
                'code' => 'Banque_et_assurance',
            ], [
                'name' => 'Banque et assurance',
            ]);
        Domain::updateOrCreate(
            [
                'code' => 'BTP_et_Matériaux_de_construction',
            ], [
                'name' => 'BTP et Matériaux de construction',
            ]);
        Domain::updateOrCreate(
            [
                'code' => 'Chimie_et_para-Chimie',
            ], [
                'name' => 'Chimie et para-Chimie',
            ]);
        Domain::updateOrCreate(
            [
                'code' => 'Niveaux',
            ], [
                'name' => 'Niveaux',
            ]);

        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 1',

        ],
            [
                'domain_id' => 1,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 2',

        ],
            [
                'domain_id' => 1,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 3',

        ],
            [
                'domain_id' => 1,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 4',

        ],
            [
                'domain_id' => 2,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 5',

        ],
            [
                'domain_id' => 2,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 6',

        ],
            [
                'domain_id' => 2,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 7',

        ],
            [
                'domain_id' => 3,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 8',

        ],
            [
                'domain_id' => 3,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 9',

        ],
            [
                'domain_id' => 3,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 10',

        ],
            [
                'domain_id' => 4,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 11',

        ],
            [
                'domain_id' => 4,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 12',

        ],
            [
                'domain_id' => 4,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 13',

        ],
            [
                'domain_id' => 5,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 14',

        ],
            [
                'domain_id' => 5,
            ]);
        PrincipalActivity::updateOrCreate([
            'name' => 'Type d\'activité 15',

        ],
            [
                'domain_id' => 5,
            ]);
    }
}
