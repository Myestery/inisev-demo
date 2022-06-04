<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "subscriber_id" => $this->faker->randomElement(\App\Models\Subscribers::pluck('id')->toArray()),
            "website_id" => $this->faker->randomElement(\App\Models\Websites::pluck('id')->toArray()),
        ];
    }
}
