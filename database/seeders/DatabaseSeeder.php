<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use APP\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Event::factory()->count(5)->create();
    }
}
