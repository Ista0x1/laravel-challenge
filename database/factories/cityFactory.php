<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\city>
 */
class cityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // i create fake data for testing purpose
        return [
            'name' => $this->faker->city,
            'country_id' => \App\Models\Country::factory(),
        ];
    }
}
