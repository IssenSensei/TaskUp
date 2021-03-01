<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_statuses')->delete();
        DB::table('task_statuses')->insert([
            [
                'name' => 'active'
            ], [
                'name' => 'abandoned'
            ], [
                'name' => 'completed'
            ], [
                'name' => 'accepted'
            ], [
                'name' => 'rejected'
            ], [
                'name' => 'board'
            ], [
                'name' => 'offered'
            ], [
                'name' => 'canceled'
            ]
        ]);
    }
}
