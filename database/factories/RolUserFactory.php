<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RolUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rol_id'=>rand(1,5),
            'user_id'=>rand(1,5),
        ];
    }
}
