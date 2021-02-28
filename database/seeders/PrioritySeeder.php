<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priorities')->delete();
        DB::table('priorities')->insert([
            [
                'name' => 'Low',
                'color' => '#3498DB'
            ],
            [
                'name' => 'Normal',
                'color' => '#28B463'
            ],
            [
                'name' => 'High',
                'color' => '#F39C12'
            ],
            [
                'name' => 'Urgent',
                'color' => '#D35400'
            ],
            [
                'name' => 'Special',
                'color' => '#7D3C98'
            ]
        ]);
    }
}
