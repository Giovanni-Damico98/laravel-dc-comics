<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // chiamo il pokemontableseeder per il popolamento della tabella 
        $this->call([
            PokemonTableSeeder::class
        ]);
    }
}