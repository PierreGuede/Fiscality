<?php

namespace Database\Seeders;

use App\Fiscality\TypeImpots\TypeImpot;
use App\Models\GuruMinimumTax;
use Illuminate\Database\Seeder;

class GuruMinimumTaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $is = TypeImpot::whereCode(TypeImpot::IS)->first();
//        Produit encaissable
        GuruMinimumTax::updateOrCreate([
            'account' => '10',
        ], [
            'name' => 'Total des produits classés 7 et 8',
            'type' => GuruMinimumTax::COLLECTABLE_PRODUCT,
            'type_impot_id' => $is->id,

        ]);

        GuruMinimumTax::updateOrCreate([
            'account' => '11',
        ], [
            'name' => 'Production immobilisée',
            'type' => GuruMinimumTax::COLLECTABLE_PRODUCT,
            'type_impot_id' => $is->id,
        ]);

        GuruMinimumTax::updateOrCreate([
            'account' => '12',
        ], [
            'name' => 'Production stockée',
            'type' => GuruMinimumTax::COLLECTABLE_PRODUCT,
            'type_impot_id' => $is->id,
        ]);

        GuruMinimumTax::updateOrCreate([
            'account' => '13',
        ], [
            'name' => 'Transferts de charges',
            'type' => GuruMinimumTax::COLLECTABLE_PRODUCT,
            'type_impot_id' => $is->id,
        ]);

        GuruMinimumTax::updateOrCreate([
            'account' => '14',
        ], [
            'name' => 'Reprises de provisions et d\'amortissements',
            'type' => GuruMinimumTax::COLLECTABLE_PRODUCT,
            'type_impot_id' => $is->id,
        ]);

//        Volume
        GuruMinimumTax::updateOrCreate([
            'account' => '15',
        ], [
            'name' => 'Volume des produits pétroliers vendus',
            'type' => GuruMinimumTax::VOLUME,
            'type_impot_id' => $is->id,
        ]);

        GuruMinimumTax::updateOrCreate([
            'account' => '16',
        ], [
            'name' => 'Gasoil',
            'type' => GuruMinimumTax::VOLUME,
            'type_impot_id' => $is->id,
        ]);

        GuruMinimumTax::updateOrCreate([
            'account' => '17',
        ], [
            'name' => 'Essence',
            'type' => GuruMinimumTax::VOLUME,
            'type_impot_id' => $is->id,
        ]);

        GuruMinimumTax::updateOrCreate([
            'account' => '17',
        ], [
            'name' => 'Gaz',
            'type' => GuruMinimumTax::VOLUME,
            'type_impot_id' => $is->id,
        ]);

        $iba = TypeImpot::whereCode(TypeImpot::IBA)->first();
        GuruMinimumTax::updateOrCreate([
            'account' => '18',
        ], [
            'name' => 'Test1',
            'type' => GuruMinimumTax::COLLECTABLE_PRODUCT,
            'type_impot_id' =>  $iba->id,
        ]);

        GuruMinimumTax::updateOrCreate([
            'account' => '19',
        ], [
            'name' => 'Test2',
            'type' => GuruMinimumTax::VOLUME,
            'type_impot_id' =>  $iba->id,
        ]);
    }
}
