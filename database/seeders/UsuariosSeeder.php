<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('usuarios')->insert([
        'nom_comple' => Str::random(8),
        'clave' => Str::random(8),
        'password' => hash::make('password'),
        'rol_id' => 1,
        'created_at' => now()
     ]);
     DB::table('usuarios')->insert([
        'nom_comple' => Str::random(8),
        'clave' => Str::random(8),
        'password' => hash::make('password'),
        'rol_id' => 1,
        'created_at' => now()
     ]);
     DB::table('usuarios')->insert([
        'nom_comple' => Str::random(8),
        'clave' => Str::random(8),
        'password' => hash::make('password'),
        'rol_id' => 1,
        'created_at' => now()
     ]);
     DB::table('usuarios')->insert([
        'nom_comple' => Str::random(8),
        'clave' => Str::random(8),
        'password' => hash::make('password'),
        'rol_id' => 1,
        'created_at' => now()
     ]);
    
    }
}
