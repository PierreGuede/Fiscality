<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PackSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(IncomeExpenseSeeder::class);
        $this->call(TypeCompanySeeder::class);
        $this->call(TypeImpotSeeder::class);
        $this->call(DomainSeeder::class);
        $this->call(BaseSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(IMItemsSeeder::class);
        $this->call(AccuredChargeSeeder::class);
        $this->call(TownSeeder::class);
        $this->call(TypeCompanyTypeImpotSeeder::class);
        $this->call(GuruMinimumTaxSeeder::class);
        $this->call(GuruAmortizationSettingSeeder::class);
        $this->call(GuruDeductionSettingSeeder::class);
        $this->call(GuruOtherReintegrationSettingSeeder::class);
        \App\Models\User::factory()->create([
            'name' => 'Test',
            'firstname' => 'User',
            'username' => 'admintec',
            'email' => 'test@example.com',
            'password' => '$2y$10$Is0AHNg89yJUYA/0jH9hUeJ7wGOC4tM9o8Nx9uAK./3XITNZB034q',
        ])->assignRole('Super-Admin');
    }
}

/*
*/
