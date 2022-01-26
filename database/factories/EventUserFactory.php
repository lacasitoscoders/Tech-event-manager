<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'event_id'=>rand(1,5),
            'user_id'=>rand(1,5),
            
        ];
    }
}
