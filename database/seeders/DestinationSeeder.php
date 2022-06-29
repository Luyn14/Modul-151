<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert(
            [
                [
                    'name' => "Mercury",
                ],
                [
                    'name' => "Venus",
                ],
                [
                    'name' => "Earth",
                ],
                [
                    'name' => "Mars",
                ],
                [
                    'name' => "Jupiter",
                ],
                [
                    'name' => "Saturn",
                ],
                [
                    'name' => "Uranus",
                ],
                [
                    'name' => "Neptun",
                ],
                [
                    'name' => "Pluto",
                ],
            ]
        );
    }
}
