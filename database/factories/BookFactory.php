<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'firstname' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'pages' => $this->faker->numberBetween(50, 1000),
            'price' => $this->faker->randomFloat(2, 5, 100),
        ];
    }
}
