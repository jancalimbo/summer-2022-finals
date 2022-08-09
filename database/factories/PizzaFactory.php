<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
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
          'toppings'=>$this->faker->randomElement(['Pepperoni', 'Pineapple', 'Bell Pepper','Olives']),
          'dough'=>$this->faker->randomElement(['Wheat', 'Normal']),
          'size'=>$this->faker->randomElement(['Small', 'Medium', 'Large'])
        ];
    }
}
