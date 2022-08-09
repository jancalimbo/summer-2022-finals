<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StreetFood>
 */
class StreetFoodFactory extends Factory
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
            'type'=>$this->faker->randomElement(['Light', 'Strong', 'Extremely Strong','Stark']),
            'price'=>$this->faker->randomDigit(100, 500),
            'location'=>$this->faker->city(),
          ];
    }
}
