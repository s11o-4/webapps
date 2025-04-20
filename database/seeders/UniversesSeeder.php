<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('universes')->insert(
            [
                [
                    'name' => 'Marvel',
                    'description' => 'Marvel Comics is an American comic book publisher known for its superhero characters.',
                    'type' => 'comic',
                ],
                [
                    'name' => 'DC',
                    'description' => 'DC Comics is an American comic book publisher known for its iconic superheroes.',
                    'type' => 'comic',
                ],
                [
                    'name' => 'Dark Horse',
                    'description' => 'Dark Horse Comics is an American comic book publisher known for its diverse range of titles.',
                    'type' => 'comic',
                ],
            ]
        );
    }
}
