<?php

namespace Database\Seeders;

use App\Models\Contact_User;
use Illuminate\Database\Seeder;

class Contact_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact_User::factory()->count(7)->create();
    }
}
