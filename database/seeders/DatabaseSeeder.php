<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Populate the database with users
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => 'testuser@example.com',
        ]);
        User::factory()->create([
            'is_admin' => true,
            'name' => 'Test administrator',
            'email' => 'testadmin@example.com',
            'password' => 'testadmin@example.com',
        ]);
        User::factory(100)->create();

        //Populate the database with events
        $events = Event::factory(20)->create();
    }
}