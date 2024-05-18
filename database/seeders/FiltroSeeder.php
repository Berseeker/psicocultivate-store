<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FiltroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filtros')->insert([
            'nombre' =>  'Terapia',
            'color' => 'form-check-success',
            'codigo' => 'terapia',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('filtros')->insert([
            'nombre' =>  'Taller Infancia',
            'color' => 'form-check-warning',
            'codigo' => 'taller_infancia',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('filtros')->insert([
            'nombre' =>  'Taller Juventudes',
            'color' => 'form-check-danger',
            'codigo' => 'taller_juventudes',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('filtros')->insert([
            'nombre' =>  'Reunion',
            'color' => 'form-check-info',
            'codigo' => 'reunion',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
