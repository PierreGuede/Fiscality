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
        \DB::table('accured_charges')->upsert(
            [
                [

                    'compte' => '1111',
                    'designation' => 'Autres provisions( Charge de personnel)',
                    'type' => AccuredCharge::PERSONNAL_PROVISION,
                ],
                [
                    'compte' => '6591',
                    'designation' => 'Charges pour dépréciations et provisions sur risque à court terme',
                    'type' => AccuredCharge::EXPENSE_PROVISIONED,
                ],
                [
                    'compte' => '6593',
                    'designation' => 'Charges pour dépréciations et provisions sur stocks',
                    'type' => AccuredCharge::EXPENSE_PROVISIONED
                ],
                [
                    'compte' => '6594',
                    'designation' => 'Charges pour dépréciations et provisions sur créances',
                    'type' => AccuredCharge::EXPENSE_PROVISIONED
                ],
                [
                    'compte' => '6598',
                    'designation' => 'Charges pour dépréciations et provisions sur autres charges',
                    'type' => AccuredCharge::EXPENSE_PROVISIONED
                ],
                [
                    'compte' => '6911',
                    'designation' => 'Dotation aux provisions pour risques et charges',
                    'type' => AccuredCharge::PROVISION,
                ],
                [
                    'compte' => '6913',
                    'designation' => 'Dotation aux dépréciations des immobilisations incorporelles',
                    'type' => AccuredCharge::PROVISION,
                ],
                [
                    'compte' => '6914',
                    'designation' => 'Dotation aux dépréciations des immobilisations coroporelles',
                    'type' => AccuredCharge::PROVISION,
                ]
            ], 'compte');

    }
}
