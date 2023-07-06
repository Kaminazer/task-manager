<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("labels")->insert([
            [
                'name' => 'bug',
                'color' => 'orange'
            ],
            [
                'name' => 'features',
                'color' => 'blue'
            ],
            [
                'name' => 'urgent',
                'color' => 'red'
            ]
        ]);
    }
}
