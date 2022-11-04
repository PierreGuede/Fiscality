<?php

namespace Database\Seeders;

use App\Fiscality\OtherReinstatements\OtherReinstatement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtherReinstatementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*
Charges ne se rapportant pas à l'exercice (et non provisionnées)
Charges non justifiées par des factures normalisées
Rémunérations n'ayant pas fait l'objet de retenues à la source
Frais financiers
Commissions sur achats
Commissions versées au courtier d'assurance ne disposant pas de
Redevances
Frais d'assistance technique, comptable et financière
Intérêts versés par un établissement stable au siège
Dons, subventions et cotisations
Cadeaux publicitaires
Dépenses Somptuaires
Rémunérations Occultes
Taxe sur les Véhicules à Moteur
Impôt sur les bénéfices
Amendes et pénalités
Immobilisations passées
Autres charges non déductibles
Variation de l'écart de conversion
Suplus de loyers (véhicule de tourisme)
Autres Charges non déductibles
 */
        OtherReinstatement::create([
            'name'=>"Charges ne se rapportant pas à l'exercice (et non provi"
        ]);
        OtherReinstatement::create([
            'name'=>"Charges non justifiées par des factures normalisées"
        ]);
        OtherReinstatement::create([
            'name'=>"Rémunérations n'ayant pas fait l'objet de retenues à la"
        ]);
        OtherReinstatement::create([
            'name'=>"Frais financiers"
        ]);
        OtherReinstatement::create([
            'name'=>"Commissions sur achats"
        ]);
        OtherReinstatement::create([
            'name'=>"Commissions versées au courtier d'assurance ne disposan"
        ]);
        OtherReinstatement::create([
            'name'=>"Redevances"
        ]);
        OtherReinstatement::create([
            'name'=>"Frais d'assistance technique, comptable et financière"
        ]);
        OtherReinstatement::create([
            'name'=>"Intérêts versés par un établissement stable au siège"
        ]);
        OtherReinstatement::create([
            'name'=>"Dons, subventions et cotisations"
        ]);
        OtherReinstatement::create([
            'name'=>"Cadeaux publicitaires"
        ]);
        OtherReinstatement::create([
            'name'=>"Dépenses Somptuaires"
        ]);
        OtherReinstatement::create([
            'name'=>"Rémunérations Occultes"
        ]);
        OtherReinstatement::create([
            'name'=>"Taxe sur les Véhicules à Moteur"
        ]);
        OtherReinstatement::create([
            'name'=>"Impôt sur les bénéfices"
        ]);
        OtherReinstatement::create([
            'name'=>"Amendes et pénalités"
        ]);
        OtherReinstatement::create([
            'name'=>"Immobilisations passées"
        ]);
        OtherReinstatement::create([
            'name'=>"Autres charges non déductibles"
        ]);
        OtherReinstatement::create([
            'name'=>"Variation de l'écart de conversion"
        ]);
        OtherReinstatement::create([
            'name'=>"Suplus de loyers (véhicule de tourisme)"
        ]);
        OtherReinstatement::create([
            'name'=>"Autres Charges non déductibles"
        ]);
}
}
