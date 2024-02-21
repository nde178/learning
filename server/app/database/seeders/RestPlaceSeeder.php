<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RestPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rest_places')->insert([
            'name'=> Str::random(10),
            'description' => Str::random(10),
            'width'=> random_int(1, 10),
            'longitude' => random_int(1, 10),
        ]);
    }
}
