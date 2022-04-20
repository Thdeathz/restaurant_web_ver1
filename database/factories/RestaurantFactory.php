<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address'=> $this->faker->address(),
            'price'=> $this->faker->biasedNumberBetween($min = 100, $max = 2000, $function = 'sqrt'),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
