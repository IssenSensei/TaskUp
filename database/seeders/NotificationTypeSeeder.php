<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification_types')->delete();
        DB::table('notification_types')->insert([
            [
                'name' => 'contact_invite'
            ],
            [
                'name' => 'contact_accept'
            ],
            [
                'name' => 'contact_refuse'
            ],
            [
                'name' => 'contact_cancel'
            ],
            [
                'name' => 'contact_remove'
            ],
            [
                'name' => 'rated_by_task_creator'
            ],
            [
                'name' => 'rated_by_task_executor'
            ],
            [
                'name' => 'board_applied'
            ],
            [
                'name' => 'board_cancelled'
            ],
            [
                'name' => 'board_added'
            ],
            [
                'name' => 'board_refused'
            ],
            [
                'name' => 'board_accepted'
            ],
            [
                'name' => 'task_completed'
            ],
            [
                'name' => 'task_abandoned'
            ],
            [
                'name' => 'task_rejected'
            ],
            [
                'name' => 'task_accepted'
            ],
            [
                'name' => 'work_offered'
            ],
            [
                'name' => 'work_accepted'
            ],
            [
                'name' => 'work_refused'
            ],
            [
                'name' => 'work_cancelled'
            ]
        ]);
    }
}
