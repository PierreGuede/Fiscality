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
        IncomeExpense::create([
            'account' => '70',
            'name' => 'Vente',
            'type' => 'income',
        ]);
        IncomeExpense::create([
            'account' => '71',
            'name' => 'Subvention d\'exploitation',
            'type' => 'income',
        ]);
        IncomeExpense::create([
            'account' => '72',
            'name' => 'Production immobilisée',
            'type' => 'income',
        ]);
        IncomeExpense::create([
            'account' => '73',
            'name' => 'Variation de stocks de biens et services produits',
            'type' => 'income',
        ]);
        IncomeExpense::create([
            'account' => '60',
            'name' => 'Achat',
            'type' => 'expense',
        ]);
        IncomeExpense::create([
            'account' => '61',
            'name' => 'Transport',
            'type' => 'expense',
        ]);
        IncomeExpense::create([
            'account' => '62',
            'name' => 'Services extérieurs',
            'type' => 'expense',
        ]);
        IncomeExpense::create([
            'account' => '63',
            'name' => 'Autres services extérieurs',
            'type' => 'expense',
        ]);
    }
}
