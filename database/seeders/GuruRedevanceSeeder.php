<?php

namespace Database\Seeders;

use App\Models\GuruRedevance;
use Illuminate\Database\Seeder;

class GuruRedevanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuruRedevance::firstOrCreate([
            'designation' => 'Redevances pour brevets, licences',
        ], ['account' => 6342]);

        GuruRedevance::firstOrCreate([
            'designation' => 'Redevances pour les logiciels',
        ], ['account' => 6343]);

        GuruRedevance::firstOrCreate([
            'designation' => 'Redevances pour marques',
        ], ['account' => 6344]);

        GuruRedevance::firstOrCreate([
            'designation' => 'Redevances pour sites internets',
        ], ['account' => 6345]);

        GuruRedevance::firstOrCreate([
            'designation' => 'Redevances pour concessions, droits et valeurs similaires',
        ], ['account' => 6346]);
    }
}
