<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cocktail>
 */
class CocktailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'name'=>$this->faker->name,
          'strength'=>$this->faker->randomElement(['Light', 'Strong', 'Extremely Strong','Stark']),
          'ingredients'=>$this->faker->text(30),
          'preparation'=>$this->faker->text(150),
          'tips'=>$this->faker->text(100),
        ];
    }
}
