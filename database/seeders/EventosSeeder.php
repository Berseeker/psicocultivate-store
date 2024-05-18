<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eventos')->insert([
            'titulo' =>  'Terapia 1',
            'fecha_empieza' => '2024-04-03 12:00:00',
            'fecha_termina' => '2024-04-04 12:00:00',
            'all_day' => false,
            'url' => 'https://google.com.mx',
            'invitados' => json_encode(['Benjamin']),
            'pacientes' => json_encode(['Luis Antonio']),
            'locacion' => 'Madrid',
            'descripcion' => 'Saca una foto de ella',
            'filtro_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('eventos')->insert([
            'titulo' =>  'Terapia 2',
            'fecha_empieza' => '2024-04-05 12:00:00',
            'fecha_termina' => '2024-04-05 14:00:00',
            'all_day' => false,
            'url' => 'https://google.com.mx',
            'invitados' => json_encode(['Benjamin']),
            'pacientes' => json_encode(['Luis Antonio']),
            'locacion' => 'Mexico',
            'descripcion' => 'Pinguinos elegantes',
            'filtro_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('eventos')->insert([
            'titulo' =>  'Terapia 3',
            'fecha_empieza' => '2024-04-06 15:00:00',
            'fecha_termina' => '2024-04-06 18:30:00',
            'all_day' => false,
            'url' => 'https://google.com.mx',
            'invitados' => json_encode(['Benjamin']),
            'pacientes' => json_encode(['Luis Antonio']),
            'locacion' => 'Portugal',
            'descripcion' => 'Distraete bailando',
            'filtro_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
