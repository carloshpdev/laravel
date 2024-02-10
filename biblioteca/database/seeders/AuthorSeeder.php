<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Laura',
            'surname' => 'Gonzalez',
            'nationality' => 'spanish',
            'gender' => 'M',
            'age' => 35,
        ]);

        Author::create([
            'name' => 'Luis Javier',
            'surname' => 'Pérez',
            'nationality' => 'Cuban',
            'gender' => 'V',
            'age' => 45,
        ]);

        Author::create([
            'name' => 'Luis',
            'surname' => 'Rodriguez',
            'nationality' => 'spanish',
            'gender' => 'V',
            'age' => 32,
        ]);

        Author::create([
            'name' => 'Pepe',
            'surname' => 'Palos',
            'nationality' => 'spanish',
            'gender' => 'V',
            'age' => 55,
        ]);

        Author::create([
            'name' => 'Javier',
            'surname' => 'Fernández',
            'nationality' => 'spanish',
            'gender' => 'V',
            'age' => 27,
        ]);

        Author::create([
            'name' => 'Carla',
            'surname' => 'Espinola',
            'nationality' => 'Argentininian',
            'gender' => 'M',
            'age' => 34,
        ]);

        Author::create([
            'name' => 'Kyle',
            'surname' => 'Smith',
            'nationality' => 'british',
            'gender' => 'M',
            'age' => 41,
        ]);

        Author::create([
            'name' => 'María',
            'surname' => 'Pérez',
            'nationality' => 'spanish',
            'gender' => 'M',
            'age' => 43,
        ]);
    }
}
