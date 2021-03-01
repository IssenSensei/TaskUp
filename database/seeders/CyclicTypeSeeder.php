<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CyclicTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cyclic_types')->delete();
        DB::table('cyclic_types')->insert([
            [
                'name' => 'None'
            ], [
                'name' => 'week'
            ], [
                'name' => 'month'
            ], [
                'name' => 'year'
            ], [
                'name' => 'value'
            ]
        ]);
    }
}
