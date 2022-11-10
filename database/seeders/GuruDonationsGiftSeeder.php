<?php

namespace Database\Seeders;

use App\Models\GuruDonationsGift;
use Illuminate\Database\Seeder;

class GuruDonationsGiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuruDonationsGift::firstOrCreate([
            'name' => 'Dons',
        ], ['account' => 6582]);

        GuruDonationsGift::firstOrCreate([
            'name' => 'Mécénat',
        ], ['account' => 6583]);

        GuruDonationsGift::firstOrCreate([
            'name' => "Versements aux syndicats et comités d'entreprise, d'établissement",
        ], ['account' => 6681]);

        GuruDonationsGift::firstOrCreate([
            'name' => "Versements aux syndicats et comités d'hygiène et de sécurité",
        ], ['account' => 6682]);

        GuruDonationsGift::firstOrCreate([
            'name' => 'Versements et contributions aux oeuvres sociales',
        ], ['account' => 6683]);

        GuruDonationsGift::firstOrCreate([
            'name' => 'Cotisations',
        ], ['account' => 6684]);

        GuruDonationsGift::firstOrCreate([
            'name' => 'Subventions',
        ], ['account' => 6685]);
    }
}
