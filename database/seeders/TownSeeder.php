<?php

namespace Database\Seeders;

use App\Models\Town;
use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $towns_data = [

            [
                'name' => 'BANIKOARA',
                'code' => 'BANIKOARA',
                'created_at' => now(),
            ],
            [
                'name' => 'GOGOUNOU',
                'code' => 'GOGOUNOU',
                'created_at' => now(),
            ],
            [
                'name' => 'KANDI',
                'code' => 'KANDI',
                'created_at' => now(),
            ],
            [
                'name' => 'KARIMAMA',
                'code' => 'KARIMAMA',
                'created_at' => now(),
            ],
            [
                'name' => 'MALANVILLE',
                'code' => 'MALANVILLE',
                'created_at' => now(),
            ],
            [
                'name' => 'SEGBANA',
                'code' => 'SEGBANA',
                'created_at' => now(),
            ],
            [
                'name' => 'BOUKOUMBE',
                'code' => 'BOUKOUMBE',
                'created_at' => now(),
            ],
            [
                'name' => 'COBLY',
                'code' => 'COBLY',
                'created_at' => now(),
            ],
            [
                'name' => 'KEROU',
                'code' => 'KEROU',
                'created_at' => now(),
            ],
            [
                'name' => 'KOUANDE',
                'code' => 'KOUANDE',
                'created_at' => now(),
            ],
            [
                'name' => 'MATERI',
                'code' => 'MATERI',
                'created_at' => now(),
            ],
            [
                'name' => 'NATITINGOU',
                'code' => 'NATITINGOU',
                'created_at' => now(),
            ],
            [
                'name' => 'OUASSA-PEHUNCO',
                'code' => 'OUASSA-PEHUNCO',
                'created_at' => now(),
            ],
            [
                'name' => 'TANGUIETA',
                'code' => 'TANGUIETA',
                'created_at' => now(),
            ],
            [
                'name' => 'TOUKOUNTOUNA',
                'code' => 'TOUKOUNTOUNA',
                'created_at' => now(),
            ],
            [
                'name' => 'ABOMEY-CALAVI',
                'code' => 'ABOMEY-CALAVI',
                'created_at' => now(),
            ],
            [
                'name' => 'ALLADA',
                'code' => 'ALLADA',
                'created_at' => now(),
            ],
            [
                'name' => 'KPOMASSE',
                'code' => 'KPOMASSE',
                'created_at' => now(),
            ],
            [
                'name' => 'OUIDAH',
                'code' => 'OUIDAH',
                'created_at' => now(),
            ],
            [
                'name' => 'SO-AVA',
                'code' => 'SO-AVA',
                'created_at' => now(),
            ],
            [
                'name' => 'TOFFO',
                'code' => 'TOFFO',
                'created_at' => now(),
            ],
            [
                'name' => 'TORI-BOSSITO',
                'code' => 'TORI-BOSSITO',
                'created_at' => now(),
            ],
            [
                'name' => 'ZE',
                'code' => 'ZE',
                'created_at' => now(),
            ],
            [
                'name' => 'BEMBEREKE',
                'code' => 'BEMBEREKE',
                'created_at' => now(),
            ],
            [
                'name' => 'KALALE',
                'code' => 'KALALE',
                'created_at' => now(),
            ],
            [
                'name' => 'N\'DALI',
                'code' => 'N\'DALI',
                'created_at' => now(),
            ],
            [
                'name' => 'NIKKI',
                'code' => 'NIKKI',
                'created_at' => now(),
            ],
            [
                'name' => 'PARAKOU',
                'code' => 'PARAKOU',
                'created_at' => now(),
            ],
            [
                'name' => 'PERERE',
                'code' => 'PERERE',
                'created_at' => now(),
            ],
            [
                'name' => 'SINENDE',
                'code' => 'SINENDE',
                'created_at' => now(),
            ],
            [
                'name' => 'TCHAOUROU',
                'code' => 'TCHAOUROU',
                'created_at' => now(),
            ],
            [
                'name' => 'BANTE',
                'code' => 'BANTE',
                'created_at' => now(),
            ],
            [
                'name' => 'DASSA-ZOUME',
                'code' => 'DASSA-ZOUME',
                'created_at' => now(),
            ],
            [
                'name' => 'GLAZOUE',
                'code' => 'GLAZOUE',
                'created_at' => now(),
            ],
            [
                'name' => 'OUESSE',
                'code' => 'OUESSE',
                'created_at' => now(),
            ],
            [
                'name' => 'SAVALOU',
                'code' => 'SAVALOU',
                'created_at' => now(),
            ],
            [
                'name' => 'SAVE',
                'code' => 'SAVE',
                'created_at' => now(),
            ],
            [
                'name' => 'APLAHOUE',
                'code' => 'APLAHOUE',
                'created_at' => now(),
            ],
            [
                'name' => 'DJAKOTOMEY',
                'code' => 'DJAKOTOMEY',
                'created_at' => now(),
            ],
            [
                'name' => 'DOGBO',
                'code' => 'DOGBO',
                'created_at' => now(),
            ],
            [
                'name' => 'KLOUEKANMEY',
                'code' => 'KLOUEKANMEY',
                'created_at' => now(),
            ],
            [
                'name' => 'LALO',
                'code' => 'LALO',
                'created_at' => now(),
            ],
            [
                'name' => 'TOVIKLIN',
                'code' => 'TOVIKLIN',
                'created_at' => now(),
            ],
            [
                'name' => 'BASSILA',
                'code' => 'BASSILA',
                'created_at' => now(),
            ],
            [
                'name' => 'COPARGO',
                'code' => 'COPARGO',
                'created_at' => now(),
            ],
            [
                'name' => 'DJOUGOU',
                'code' => 'DJOUGOU',
                'created_at' => now(),
            ],
            [
                'name' => 'OUAKE',
                'code' => 'OUAKE',
                'created_at' => now(),
            ],
            [
                'name' => 'COTONOU',
                'code' => 'COTONOU',
                'created_at' => now(),
            ],
            [
                'name' => 'ATHIEME',
                'code' => 'ATHIEME',
                'created_at' => now(),
            ],
            [
                'name' => 'BOPA',
                'code' => 'BOPA',
                'created_at' => now(),
            ],
            [
                'name' => 'COME',
                'code' => 'COME',
                'created_at' => now(),
            ],
            [
                'name' => 'GRAND-POPO',
                'code' => 'GRAND-POPO',
                'created_at' => now(),
            ],
            [
                'name' => 'HOUEYOGBE',
                'code' => 'HOUEYOGBE',
                'created_at' => now(),
            ],
            [
                'name' => 'LOKOSSA',
                'code' => 'LOKOSSA',
                'created_at' => now(),
            ],
            [
                'name' => 'ADJARRA',
                'code' => 'ADJARRA',
                'created_at' => now(),
            ],
            [
                'name' => 'ADJOHOUN',
                'code' => 'ADJOHOUN',
                'created_at' => now(),
            ],
            [
                'name' => 'AGUEGUES',
                'code' => 'AGUEGUES',
                'created_at' => now(),
            ],
            [
                'name' => 'AKPRO-MISSERETE',
                'code' => 'AKPRO-MISSERETE',
                'created_at' => now(),
            ],
            [
                'name' => 'AVRANKOU',
                'code' => 'AVRANKOU',
                'created_at' => now(),
            ],
            [
                'name' => 'BONOU',
                'code' => 'BONOU',
                'created_at' => now(),
            ],
            [
                'name' => 'DANGBO',
                'code' => 'DANGBO',
                'created_at' => now(),
            ],
            [
                'name' => 'PORTO-NOVO',
                'code' => 'PORTO-NOVO',
                'created_at' => now(),
            ],
            [
                'name' => 'SEME-PODJI',
                'code' => 'SEME-PODJI',
                'created_at' => now(),
            ],
            [
                'name' => 'ADJA-OUERE',
                'code' => 'ADJA-OUERE',
                'created_at' => now(),
            ],
            [
                'name' => 'IFANGNI',
                'code' => 'IFANGNI',
                'created_at' => now(),
            ],
            [
                'name' => 'KETOU',
                'code' => 'KETOU',
                'created_at' => now(),
            ],
            [
                'name' => 'POBE',
                'code' => 'POBE',
                'created_at' => now(),
            ],
            [
                'name' => 'SAKETE',
                'code' => 'SAKETE',
                'created_at' => now(),
            ],
            [
                'name' => 'ABOMEY',
                'code' => 'ABOMEY',
                'created_at' => now(),
            ],
            [
                'name' => 'AGBANGNIZOUN',
                'code' => 'AGBANGNIZOUN',
                'created_at' => now(),
            ],
            [
                'name' => 'BOHICON',
                'code' => 'BOHICON',
                'created_at' => now(),
            ],
            [
                'name' => 'COVE',
                'code' => 'COVE',
                'created_at' => now(),
            ],
            [
                'name' => 'DJIDJA',
                'code' => 'DJIDJA',
                'created_at' => now(),
            ],
            [
                'name' => 'OUINHI',
                'code' => 'OUINHI',
                'created_at' => now(),
            ],
            [
                'name' => 'ZAGNANADO',
                'code' => 'ZAGNANADO',
                'created_at' => now(),
            ],
            [
                'name' => 'ZA-KPOTA',
                'code' => 'ZA-KPOTA',
                'created_at' => now(),
            ],
            [
                'name' => 'ZOGBODOMEY',
                'code' => 'ZOGBODOMEY',
                'created_at' => now(),
            ],

        ];

        Town::upsert($towns_data, ['code']);
    }
}
