<?php

namespace Database\Seeders;

use App\Models\Conversation_User;
use Illuminate\Database\Seeder;

class Conversation_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conversation_User::factory()->count(8)->create();
    }
}
