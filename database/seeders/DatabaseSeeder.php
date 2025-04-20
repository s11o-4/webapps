<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Genders;
use App\Models\Universes;
use App\Models\Superheroes;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Genders::factory(10)->create();

        Universes::factory(3)->create();

        Superheroes::factory(3)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            GendersSeeder::class,
            UniversesSeeder::class,
            SuperheroesSeeder::class,
        ]);
    }
}
