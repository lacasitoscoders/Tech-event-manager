<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use APP\Models\Event;
use APP\Models\Event_user;
use APP\Models\rol_user;
use APP\Models\Rol;
use APP\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Event::factory()->count(5)->create();
        Event_user::factory()->count(5)->create();
        Rol_user::factory()->count(5)->create();
        Rol::factory()->count(5)->create();
        User::factory()->count(5)->create();
    }
}
