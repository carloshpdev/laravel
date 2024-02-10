<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rental;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $numRentals = 100;


        for ($i = 0; $i < $numRentals; $i++) {
            $rental = new Rental([
                'user_id' => rand(1, 100), // Reemplaza 10 por el número total de usuarios
                'book_id' => rand(42, 66), // Reemplaza 66 por el último id de libro
                'rental_date' => now()->subDays(rand(0, 30)), // Fecha de alquiler aleatoria en los últimos 30 días
                'return_date' => now()->addDays(rand(1, 30)), // Fecha de devolución aleatoria en los próximos 30 días
            ]);
            $rental->save();
        }
    }
}
