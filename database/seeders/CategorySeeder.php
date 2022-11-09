<?php

namespace Database\Seeders;

use App\Fiscality\Categories\Category;
use App\Fiscality\DetailTypes\DetailType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Taux d\'impôt',
            'code' => Str::slug('Taux impôt','_'),
        ]);
        Category::create([
            'name' => 'Impot minimum',
            'code' => Str::slug('Impot minimum','_'),
        ]);
        Category::create([
            'name' => 'Minimum Forfaitaire',
            'code' => Str::slug('Minimum_Forfaitaire','_'),
        ]);

        DetailType::create([
            'name' => 'Entreprise à prépondérance immobilière',
            'code' => '508573',
            'category_id' => 2,
            'base_id' => 2,
            'taux' => '25',
            'type_impot_id' => 1,
            'description' => 'null',
            'article' => 'article',
        ]);
        DetailType::create([
            'name' => 'Entreprise du secteur du bâtiment et des travaux publique',
            'code' => '508574',
            'category_id' => 2,
            'base_id' => 2,
            'taux' => '3',
            'type_impot_id' => 1,
            'description' => 'null',
            'article' => 'article',
        ]);
        DetailType::create([
            'name' => 'Impôt sur les société dû',
            'code' => '508575',
            'category_id' => 3,
            'base_id' => 1,
            'taux' => '10',
            'type_impot_id' => 2,
            'description' => 'null',
            'article' => 'article',
        ]);
        DetailType::create([
            'name' => 'Distributeurs non importateurs de produits pétroliers et les stations services',
            'code' => '508576',
            'category_id' => 2,
            'base_id' => 3,
            'taux' => '10',
            'type_impot_id' => 2,
            'description' => 'null',
            'article' => 'article',
        ]);
        DetailType::create([
            'name' => 'Industries',
            'code' => '508577',
            'category_id' => 1,
            'base_id' => 2,
            'taux' => '20',
            'type_impot_id' => 1,
            'description' => 'null',
            'article' => 'article',
        ]);
        DetailType::create([
            'name' => 'Ecoles privées',
            'code' => '508578',
            'category_id' => 1,
            'base_id' => 2,
            'taux' => '25',
            'type_impot_id' => 1,
            'description' => 'null',
            'article' => 'article',
        ]);
    }
}
