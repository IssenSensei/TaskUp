<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            PrioritySeeder::class,
            CyclicTypeSeeder::class,
            TaskStatusSeeder::class,
            CyclicTypeSeeder::class,
            UserSeeder::class,
            ContactSeeder::class,
            ConversationSeeder::class,
            MessageSeeder::class,
            Conversation_UserSeeder::class,
            Contact_UserSeeder::class,
            NotificationTypeSeeder::class
        ]);
    }
}
