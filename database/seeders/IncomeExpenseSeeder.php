<?php

namespace Database\Seeders;

use App\Fiscality\IncomeExpenses\IncomeExpense;
use Illuminate\Database\Seeder;

class IncomeExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IncomeExpense::updateOrCreate([
            'account' => '70',
        ],
            [
                'name' => 'Vente',
                'type' => 'income',
            ]);
        IncomeExpense::updateOrCreate([
            'account' => '71',
        ],
            [
                'name' => 'Subvention d\'exploitation',
                'type' => 'income',
            ]);
        IncomeExpense::updateOrCreate([
            'account' => '72',
        ],
            [
                'name' => 'Production immobilisée',
                'type' => 'income',
            ]);
        IncomeExpense::updateOrCreate([
            'account' => '73',
        ],
            [
                'name' => 'Variation de stocks de biens et services produits',
                'type' => 'income',
            ]);
        IncomeExpense::updateOrCreate([
            'account' => '60',
        ],
            [
                'name' => 'Achat',
                'type' => 'expense',
            ]);
        IncomeExpense::updateOrCreate([
            'account' => '61',
        ],
            [
                'name' => 'Transport',
                'type' => 'expense',
            ]);
        IncomeExpense::updateOrCreate([
            'account' => '62',
        ],
            [
                'name' => 'Services extérieurs',
                'type' => 'expense',
            ]);
        IncomeExpense::updateOrCreate([
            'account' => '63',
        ],
            [
                'name' => 'Autres services extérieurs',
                'type' => 'expense',
            ]);
    }
}
