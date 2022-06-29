<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpaceshiproleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spaceshiproles')->insert(
            [
                [
                    'name' => "Gunship"
                ],
                [
                    'name' => "Scout"
                ],
                [
                    'name' => "Frigate"
                ],
                [
                    'name' => "Freighter"
                ],
                [
                    'name' => "Cruiser"
                ],
                [
                    'name' => "Destroyer"
                ],
                [
                    'name' => "Capitalship"
                ]
            ]
        );
    }
}
