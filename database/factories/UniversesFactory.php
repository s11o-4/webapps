<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Universes>
 */
class UniversesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $universeNames = [
            'Marvel',
            'DC',
            'Dark Horse',
            'Image Comics',
            'IDW Publishing',
            'Dynamite Entertainment',
            'Valiant Comics',
            'BOOM! Studios',
            'D.C. Thomson & Co.',
            'Dynamite Entertainment'
        ];
        return [
            'name' => $this->faker->unique()->randomElement($universeNames),
            'description' => $this->faker->text(200),
            'type' => $this->faker->randomElement(['comic', 'movie', 'tv_show']),
        ];
    }
}
