<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MainNav>
 */
class MainNavFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realText(20),
            'link' => $this->faker->image(),
            'order' => $this->faker->unique()->numberBetween(1, 10),
            'visible' => $this->faker->boolean(),
        ];
    }
}
