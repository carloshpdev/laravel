<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos una instancia de Faker
        $faker = Faker::create();

        // Definimos la cantidad de usuarios que queremos crear
        $numUsers = 100;

        // Generamos los usuarios aleatorios
        for ($i = 0; $i < $numUsers; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'), // Asignamos una contraseña por defecto
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
