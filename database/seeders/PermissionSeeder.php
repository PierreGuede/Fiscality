<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'create','Description'=>'Permet de créer de modifier de supprimer une info ou donnée de l\'entreprise']);
        Permission::create(['name' => 'read','Description'=>"Lorsque vous disposez d'une autorisation de lecture, vous pouvez effectuer des tâches dans lesquelles vous affichez les détails associés à l'objet."]);
        Permission::create(['name' => 'edit','Description'=>'Permet de modifier et supprimer une info de l\'entreprise.']);
        Permission::create(['name' => 'delete','Description'=>'Permet d\'effectuer des suppressions sur une info ou donnée de l\'entreprise']);
    }
}
