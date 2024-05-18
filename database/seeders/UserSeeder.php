<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nombre' =>  'Juan Pablo',
            'apellidos' =>  'Gomez Tejeda',
            'email' => 'juan.alucard.02@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'nombre' =>  'Osiris',
            'apellidos' =>  'Morales Ruiz',
            'email' => 'osiris.moralesrz@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'nombre' =>  'Luis Antonio',
            'apellidos' =>  'Gomez Tejeda',
            'email' => 'paciente@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'nombre' =>  'Pedro',
            'apellidos' =>  'Paquita Lopez',
            'email' => 'pedro@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $user = User::where('email', 'juan.alucard.02@gmail.com')->first();
        $user->assignRole('admin');

        $user = User::where('email', 'osiris.moralesrz@gmail.com')->first();
        $user->assignRole('psicologa');

        $user = User::where('email', 'paciente@gmail.com')->first();
        $user->assignRole('paciente');

        $user = User::where('email', 'pedro@gmail.com')->first();
        $user->assignRole('paciente_taller');
    }
}
