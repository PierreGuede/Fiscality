<?php

namespace Database\Seeders;

use App\Fiscality\Bases\Base;
use App\Fiscality\Categories\Category;
use App\Fiscality\TypeImpots\TypeImpot;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->upsert([
            [
                'code' => 'IMPOT_REEL',
                'name' => 'Catégorie d\'activité: Impôt réel',
            ],
            [
                'code' => 'IMPOT_MINIMUM',
                'name' => 'Catégorie d\'activité: Impôt minimum',
            ],
            [
                'code' => 'IMPOT_MINIMUM_FORFETAIRE',
                'name' => 'Catégorie d\'activité: Impôt minimum forfaitaire',
            ],
        ], 'code');

        $impot_reel = Category::whereCode(Category::IMPOT_REEL)->first('id');
        $impot_minimum = Category::whereCode(Category::IMPOT_MINIMUM)->first('id');
        $impot_minimum_forfetaire = Category::whereCode(Category::IMPOT_MINIMUM_FORFETAIRE)->first('id');

        $is = TypeImpot::whereCode(TypeImpot::IS)->first('id');
        $iba = TypeImpot::whereCode(TypeImpot::IBA)->first('id');
        $ircm_sur_charges = TypeImpot::whereCode(TypeImpot::IRCM_SUR_CHARGES)->first('id');
        $ircm_sur_resultat = TypeImpot::whereCode(TypeImpot::IRCM_SUR_RESULTAT)->first('id');

        $benefice_fiscal= Base::whereCode(Base::BENEFICE_FISCAL)->first('id');
        $produit_encaissable= Base::whereCode(Base::PRODUIT_ENCAISSABLE)->first('id');
        $volume= Base::whereCode(Base::VOLUME)->first('id');
        $benefice_affaire= Base::whereCode(Base::BENEFICE_AFFAIRE)->first('id');

//        IS
//        Impôt réel
        \DB::table('detail_types')->upsert([
            [
                'code' => '508577',
                'name' => 'Industries',
                'category_id' => $impot_reel->id,
                'base_id' => $benefice_fiscal->id,
                'taux' => '25',
                'type_impot_id' => $is->id,
                'description' => 'null',
                'article' => 'article',
            ],
            [
                'code' => '508578',
                'name' => 'Ecoles privées',
                'category_id' => $impot_reel->id,
                'base_id' => $benefice_fiscal->id,
                'taux' => '25',
                'type_impot_id' => $is->id,
                'description' => 'null',
                'article' => 'article',
            ],
            [
                'code' => '508579',
                'name' => 'Sociétés bénéficiant d’une convention minière ou pétrolière',
                'category_id' => $impot_reel->id,
                'base_id' => $benefice_fiscal->id,
                'taux' => '30',
                'type_impot_id' => $is->id,
                'description' => 'Merci de vous référer au taux prévu dans la convention, 30% est le taux minimum',
                'article' => 'article',
            ],
            [
                'code' => '508579',
                'name' => 'Autres (Droit commun)',
                'category_id' => $impot_reel->id,
                'base_id' => $benefice_fiscal->id,
                'taux' => '30',
                'type_impot_id' => $is->id,
                'description' => 'null',
                'article' => 'article',
            ],
        ], 'code');

        // Impôt minimum
        \DB::table('detail_types')->upsert([
            [
                'code' => '508573',
                'name' => 'Entreprise à prépondérance immobilière',
                'category_id' => $impot_minimum->id,
                'base_id' => $produit_encaissable->id,
                'taux' => '10',
                'type_impot_id' => $is->id,
                'description' => 'null',
                'article' => 'article',
            ],
            [
                'code' => '508574',
                'name' => 'Entreprise du secteur du bâtiment et des travaux publique',
                'category_id' => $impot_minimum->id,
                'base_id' => $produit_encaissable->id,
                'taux' => '3',
                'type_impot_id' => $is->id,
                'description' => 'null',
                'article' => 'article',
            ],
            [
                'code' => '508576',
                'name' => 'Distributeurs non importateurs de produits pétroliers et les stations services',
                'category_id' => $impot_minimum->id,
                'base_id' => 3,
                //                0,6 franc CFA par litre au volume
                'taux' => '0.6',
                'type_impot_id' => $is->id,
                'description' => 'null',
                'article' => 'article',
            ],
            [
                'code' => '508580',
                'name' => 'Autres cas (droit commun)',
                'category_id' => $impot_minimum->id,
                'base_id' => 3,
                'taux' => '1',
                'type_impot_id' => $is->id,
                'description' => 'null',
                'article' => 'article',
            ],
            [
                //                Last
                'code' => '508583',
                'name' => 'Commerce de véhicule d\'occasion et produits de grande consommation',
                'category_id' => $impot_minimum->id,
                'base_id' => 3,
                'taux' => '10',
                'type_impot_id' => $is->id,
                'description' => 'Le montant fixé par voie réglementaire',
                'article' => 'article',
            ],
        ], 'code');

        \DB::table('detail_types')->upsert([
            [
                'code' => '508581',
                'name' => 'Distributeurs non importateurs de produits pétroliers et  les stations-services (pratiquant les prix homologués)',
                'category_id' => 2,
                'base_id' => 3,
                //                500_000
                'taux' => '250000',
                'type_impot_id' => 1,
                'description' => 'null',
                'article' => 'article',
            ],
            [
                'code' => '508582',
                'name' => 'Autres cas (droit commun)',
                'category_id' => 2,
                'base_id' => 3,
                'taux' => '500000',
                'type_impot_id' => 1,
                'description' => 'null',
                'article' => 'article',
            ],
        ], 'code');

//        2
        DB::table('detail_types')->upsert([
            [
                'code' => '508575',
                'name' => 'Impôt sur les société dû',
                'category_id' => 3,
                'base_id' => $benefice_fiscal->id,
                'taux' => '500000',
                'type_impot_id' => 2,
                'description' => 'null',
                'article' => 'article',
            ],
        ], 'code');
    }
}
