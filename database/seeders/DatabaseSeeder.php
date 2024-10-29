<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'nombre' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'nombre' => 'Antonio',
            'email' => 'antonio@gmail.com',
            'password'=> Hash::make('antonio'),
            'confirm_password'=> Hash::make('antonio'),
            'telefono'=> '4422223333',
            'confirm_telefono'=> '4422223333',
            'sexo' => 'hombre',
            'fecha_nacimiento'=> '1975-06-22',
            'nss'=> '21834218',
            'curp' => 'MDOEMW31920'
        ]);
    }
}
