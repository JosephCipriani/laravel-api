<?php

namespace Database\Seeders;

use App\Models\Carro;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    public function run(): void
    {
        Carro::create([
        'modelo' => 'Civic',
        'marca' => 'Honda',
        'ano' => 2020
        ]);
        Carro::create([
        'modelo' => 'Corolla',
        'marca' => 'Toyota',
        'ano' => 2019
        ]);
    }
}
