<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genders>
 */
class GendersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    const possibleGenders = array("helicopter", "lesbian", "gay", "airplane", "bus");

    public function definition(): array
    {
        return [
            'gender' => $this->faker->randomElement(self::possibleGenders),
        ];
    }
}
