<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

// creo attraverso il seeder dei record randomici per i pokemon
class PokemonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $nomi = ['Pikachu', 'Charmander', 'Bulbasaur', 'Squirtle', 'Jigglypuff', 'Meowth', 'Psyduck', 'Snorlax', 'Eevee', 'Mewtwo'];
        $specie = ['Mouse', 'Lizard', 'Seed', 'Tiny Turtle', 'Balloon', 'Cat', 'Duck', 'Sleeping', 'Evolution', 'Genetic'];
        $abilita = ['Static', 'Blaze', 'Overgrow', 'Torrent', 'Cute Charm', 'Pickup', 'Damp', 'Immunity', 'Adaptability', 'Pressure'];
        $elementi = ['Electric', 'Fire', 'Grass', 'Water', 'Fairy', 'Normal', 'Water', 'Normal', 'Normal', 'Psychic'];

        for ($i = 0; $i < 20; $i++) {
            Pokemon::create([
                'nome' => $faker->randomElement($nomi),
                'specie' => $faker->randomElement($specie),
                'abilita' => $faker->randomElement($abilita),
                'elemento' => $faker->randomElement($elementi),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}