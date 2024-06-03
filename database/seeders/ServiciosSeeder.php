<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            'nombre' => 'Psicoterapia',
            'slug' => Str::slug('Psicoterapia', '-'),
            'precio' => 600,
            'shortDesc' => 'Hola Mundo',
            'descripcion' => 'Hola Mundo',
            'main_image' => 'services/servicio_psicoterapia.jpg',
            'background_image' => 'services/servicio_psicoterapia.jpg'
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Talleres Psicoeducativos',
            'slug' => Str::slug('Talleres Psicoeducativos', '-'),
            'precio' => 600,
            'shortDesc' => 'Hola Mundo',
            'descripcion' => 'Hola Mundo',
            'main_image' => 'services/servicio_talleres.jpg',
            'background_image' => 'services/servicio_talleress.jpg'
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Informe Psicológico',
            'slug' => Str::slug('Informe Psicológico', '-'),
            'precio' => 600,
            'shortDesc' => 'Hola Mundo',
            'descripcion' => 'Hola Mundo',
            'main_image' => 'services/servicio_informe.jpg',
            'background_image' => 'services/servicio_informe.jpg'
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Atención Psicológica',
            'slug' => Str::slug('Atención Psicológica', '-'),
            'precio' => 600,
            'shortDesc' => 'Hola Mundo',
            'descripcion' => 'Hola Mundo',
            'main_image' => 'services/servicio_atencion.jpg',
            'background_image' => 'services/servicio_atencion.jpg'
        ]);
    }
}
