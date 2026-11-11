<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petition>
 */
class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(10),
            'category' => $this->faker->word(5),
            'description' => $this->faker->text(200),
            'author' => $this->faker->name(),
            'signees' => $this->faker->numberBetween(0, 10000000),
        ];
    }
}
