<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    public function definition()
    {
        return [
            'number'    => $this->faker->randomNumber(),
            'type'      => 'mobile',
            'person_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
