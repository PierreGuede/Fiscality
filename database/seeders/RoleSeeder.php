<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate(
            ['name' => 'Super-Admin'],
            ['name' => 'Super-Admin']);
        Role::updateOrCreate(
            ['name' => 'cabinet'],
            ['name' => 'cabinet']);
        Role::updateOrCreate(
            ['name' => 'enterprise'],
            ['name' => 'enterprise']);

        Role::updateOrCreate(
            ['name' => 'Ressource'],
            ['name' => 'Ressource']);


    }
}
