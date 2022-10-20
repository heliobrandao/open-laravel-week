<?php

namespace Database\Factories;

use App\Models\Meal;
use Illuminate\Database\Eloquent\Factories\Factory;
use FakerRestaurant\Provider\en_US;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meal>
 */
class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        fake()->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant(fake()));

        return [
            "name" => fake()->meatName()
        ];
    }
}
