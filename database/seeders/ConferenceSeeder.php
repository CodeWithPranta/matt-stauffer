<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conferences')->insert([
            [
                'slug' => 'first conference',
                'name' => 'Conference1',
                'description' => 'Something goes here',
            ],
            [
                'slug' => 'second conference',
                'name' => 'Conference2',
                'description' => 'Something goes here',
            ],
            [
                'slug' => 'third conference',
                'name' => 'Conference3',
                'description' => 'Something goes here',
            ],
            [
                'slug' => 'fourth conference',
                'name' => 'Conference4',
                'description' => 'Something goes here',
            ],
        ]);
    }
}
