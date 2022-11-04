<?php

namespace Database\Seeders;

use App\Fiscality\AccuredCharges\AccuredCharge;
use Illuminate\Database\Seeder;

class AccuredChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccuredCharge::create([
            'compte' => '6591',
            'designation' => 'Charges pour dépréciations et provisions sur risque à court terme',
            'type' => 'provision',
        ]);
        AccuredCharge::create([
            'compte' => '6593',
            'designation' => 'Charges pour dépréciations et provisions sur stocks',
            'type' => 'provision',
        ]);
        AccuredCharge::create([
            'compte' => '6594',
            'designation' => 'Charges pour dépréciations et provisions sur créances',
            'type' => 'provision',
        ]);
        AccuredCharge::create([
            'compte' => '6598',
            'designation' => 'Charges pour dépréciations et provisions sur autres charges',
            'type' => 'provision',
        ]);
        AccuredCharge::create([
            'compte' => '6911',
            'designation' => 'Dotation aux provisions pour risques et charges',
            'type' => 'charges',
        ]);
        AccuredCharge::create([
            'compte' => '6913',
            'designation' => 'Dotation aux dépréciations des immobilisations incorporelles',
            'type' => 'charges',
        ]);
        AccuredCharge::create([
            'compte' => '6914',
            'designation' => 'Dotation aux dépréciations des immobilisations coroporelles',
            'type' => 'charges',
        ]);
    }
}
