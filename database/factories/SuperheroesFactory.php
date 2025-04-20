<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\Universes;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superheroes>
 */
class SuperheroesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $super_heroes = [
            'Superman',
            'Batman',
            'Wonder Woman',
            'Spider-Man',
            'Iron Man',
            'Captain America',
            'Thor',
            'Hulk',
            'Black Widow',
            'Doctor Strange',
        ];

        $firstNames = [
            'Clark',
            'Bruce',
            'Diana',
            'Peter',
            'Tony',
            'Steve',
            'Thor',
            'Robert',
            'Natasha',
            'Stephen',
        ];

        $lastNames = [
            'Kent',
            'Wayne',
            'Prince',
            'Parker',
            'Stark',
            'Rogers',
            'Odinson',
            'Banner',
            'Romanoff',
            'Strange',
        ];

        $superpowers = [
            'Flight, Super Strength, Heat Vision',
            'Genius Intellect, Martial Arts, Gadgets',
            'Super Strength, Flight, Lasso of Truth',
            'Spider-Sense, Web-Shooting, Wall-Crawling',
            'Powered Armor, Genius Intellect',
            'Super Strength, Vibranium Shield',
            'Godly Strength, Hammer Mjolnir, Lightning Manipulation',
            'Super Strength, Gamma Radiation',
            'Master Spy, Hand-to-Hand Combat',
            'Master of the Mystic Arts, Sorcery',
        ];

        return [
            'universe_id' => Universes::factory(),
            'real_firstname' => fake()->firstName(),
            'real_lastname' => fake()->lastName(),
            'alter_ego' => Arr::random($super_heroes),
            'superpower' => Arr::random($superpowers),
            'age' => fake()->numberBetween(18, 100),
        ];
    }
}
