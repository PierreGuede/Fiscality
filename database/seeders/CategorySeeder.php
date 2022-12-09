<?php

namespace Database\Seeders;

use App\Fiscality\Categories\Category;
use App\Fiscality\DetailTypes\DetailType;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            [
                'code' => 'IMPOT_REEL',
                'name' => 'Impôt réel',
            ],
            [
                'code' => 'IMPOT_MINIMUM',
                'name' => 'Impôt minimum',
            ],
            [
                'code' => 'IMPOT_MINIMUM_FORFETAIRE',
                'name' => 'Impôt minimum forfaitaire',
            ],
        ]);
//       $ir =  Category::create([
//            'code' => 'IMPOT_REEL',
//            'name' => 'Impôt réel',
//        ]);
//       $im = Category::create([
//            'code' => 'IMPOT_MINIMUM',
//            'name' => 'Impôt minimum',
//        ]);
//      $imf =  Category::create([
//            'code' => 'IMPOT_MINIMUM_FORFETAIRE',
//            'name' => 'Impôt minimum forfaitaire',
//        ]);

//        DetailType::create( [
//            'code' => '508573',
//            'name' => 'Entreprise à prépondérance immobilière',
//            'category_id' => 2,
//            'base_id' => 2,
//            'taux' => '25',
//            'type_impot_id' => 1,
//            'description' => 'null',
//            'article' => 'article',
//        ]);
//        DetailType::create([
//            'code' => '508574',
//            'name' => 'Entreprise du secteur du bâtiment et des travaux publique',
//            'category_id' => 2,
//            'base_id' => 2,
//            'taux' => '3',
//            'type_impot_id' => 1,
//            'description' => 'null',
//            'article' => 'article',
//        ]);
//        DetailType::create([
//            'code' => '508575',
//            'name' => 'Impôt sur les société dû',
//            'category_id' => 3,
//            'base_id' => 1,
//            'taux' => '10',
//            'type_impot_id' => 2,
//            'description' => 'null',
//            'article' => 'article',
//        ]);
//        DetailType::create([
//            'code' => '508576',
//            'name' => 'Distributeurs non importateurs de produits pétroliers et les stations services',
//            'category_id' => 2,
//            'base_id' => 3,
//            'taux' => '10',
//            'type_impot_id' => 2,
//            'description' => 'null',
//            'article' => 'article',
//        ]);
//        DetailType::create([
//            'code' => '508577',
//            'name' => 'Industries',
//            'category_id' => 1,
//            'base_id' => 1,
//            'taux' => '20',
//            'type_impot_id' => 1,
//            'description' => 'null',
//            'article' => 'article',
//        ]);
//        DetailType::create([
//            'code' => '508578',
//            'name' => 'Ecoles privées',
//            'category_id' => 1,
//            'base_id' => 1,
//            'taux' => '25',
//            'type_impot_id' => 1,
//            'description' => 'null',
//            'article' => 'article',
//        ]);

        \DB::table('detail_types')->insert([
            [
                'code' => '508573',
                'name' => 'Entreprise à prépondérance immobilière',
                'category_id' => 2,
                'base_id' => 2,
                'taux' => '25',
                'type_impot_id' => 1,
                'description' => 'null',
                'article' => 'article',
            ],
            [
                'code' => '508574',
                'name' => 'Entreprise du secteur du bâtiment et des travaux publique',
                'category_id' => 2,
                'base_id' => 2,
                'taux' => '3',
                'type_impot_id' => 1,
                'description' => 'null',
                'article' => 'article',
            ],
            [
                'code' => '508575',
                'name' => 'Impôt sur les société dû',
                'category_id' => 3,
                'base_id' => 1,
                'taux' => '10',
                'type_impot_id' => 2,
                'description' => 'null',
                'article' => 'article',
            ],
            [
                'code' => '508576',
                'name' => 'Distributeurs non importateurs de produits pétroliers et les stations services',
                'category_id' => 2,
                'base_id' => 3,
                'taux' => '10',
                'type_impot_id' => 2,
                'description' => 'null',
                'article' => 'article',
            ],
        ]);
    }
}
