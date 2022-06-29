<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpaceshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spaceships')->insert(
            [
                [
                    'name' => "Pillar of Autumn",
                    'division_id' => 1,
                    'spaceshiprole_id' => 7,
                    'destinationMoon_id' => 3

                ],
                [
                    'name' => "Nexus",
                    'division_id' => 1,
                    'spaceshiprole_id' => 6,
                    'destinationMoon_id' => 4
                ],
                [
                    'name' => "Bolt",
                    'division_id' => 2,
                    'spaceshiprole_id' => 5,
                    'destinationMoon_id' => 4
                ],
                [
                    'name' => "Passage",
                    'division_id' => 2,
                    'spaceshiprole_id' => 3,
                    'destinationMoon_id' => 5
                ]
            ]
        );
    }
}
