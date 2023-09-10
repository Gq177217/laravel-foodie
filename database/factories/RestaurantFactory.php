<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Appp\Models\Restaurant;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */

 class RestaurantFactory extends Factory
 {
     /**
      * Define the model's default state.
      *
      * @return array<string, mixed>
      */
     public function definition()
     {
         return [
            'restaurant_name' => $this->faker->name(),
            'postalcode' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'price' => $this->faker->numberBetween(1000, 20000),
            'details' => $this->faker->realText(),
         ];
     }
 }

