<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #Rol - Admin
        Role::create(['name' => 'admin']);

        #Roles - Hoteles
        Role::create(['name' => 'psicologa']);
        Role::create(['name' => 'paciente']);
        Role::create(['name' => 'paciente_taller']);
    }
}
