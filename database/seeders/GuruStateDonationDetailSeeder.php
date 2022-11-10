<?php

namespace Database\Seeders;

use App\Models\GuruStateDonationDetail;
use Illuminate\Database\Seeder;

class GuruStateDonationDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuruStateDonationDetail::firstOrCreate([
            'name' => 'Limite',
        ], ['account' => 10]);

        GuruStateDonationDetail::firstOrCreate([
            'name' => "Subventions à l'état",
        ], ['account' => 11]);

        GuruStateDonationDetail::firstOrCreate([
            'name' => "Subventions aux démenbrement de l'état",
        ], ['account' => 12]);
    }
}
