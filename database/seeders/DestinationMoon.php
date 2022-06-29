<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationMoon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinationMoon')->insert(
            [
                [
                    'destination_id' => 1,
                    'moon_id' => 1
                ],
                [
                    'destination_id' => 2,
                    'moon_id' => 1
                ],
                [
                    'destination_id' => 3,
                    'moon_id' => 1
                ],
                [
                    'destination_id' => 3,
                    'moon_id' => 2
                ],
                [
                    'destination_id' => 4,
                    'moon_id' => 1
                ],
                [
                    'destination_id' => 4,
                    'moon_id' => 3
                ],
                [
                    'destination_id' => 4,
                    'moon_id' => 4
                ],
                [
                    'destination_id' => 5,
                    'moon_id' => 1
                ],
                [
                    'destination_id' => 5,
                    'moon_id' => 5
                ],
                [
                    'destination_id' => 5,
                    'moon_id' => 6
                ],
                [
                    'destination_id' => 5,
                    'moon_id' => 7
                ],
                [
                    'destination_id' => 5,
                    'moon_id' => 8
                ],
                [
                    'destination_id' => 6,
                    'moon_id' => 1
                ],
                [
                    'destination_id' => 6,
                    'moon_id' => 9
                ],
                [
                    'destination_id' => 6,
                    'moon_id' => 10
                ],
                [
                    'destination_id' => 6,
                    'moon_id' => 11
                ],
                [
                    'destination_id' => 6,
                    'moon_id' => 12
                ],
                [
                    'destination_id' => 7,
                    'moon_id' => 1
                ],
                [
                    'destination_id' => 7,
                    'moon_id' => 13
                ],
                [
                    'destination_id' => 7,
                    'moon_id' => 14
                ],
                [
                    'destination_id' => 7,
                    'moon_id' => 15
                ],
                [
                    'destination_id' => 7,
                    'moon_id' => 16
                ],
                [
                    'destination_id' => 8,
                    'moon_id' => 1
                ],
                [
                    'destination_id' => 8,
                    'moon_id' => 17
                ],
                [
                    'destination_id' => 8,
                    'moon_id' => 18
                ],
                [
                    'destination_id' => 8,
                    'moon_id' => 19
                ],
                [
                    'destination_id' => 8,
                    'moon_id' => 20
                ],
                [
                    'destination_id' => 9,
                    'moon_id' => 1
                ],
            ]
        );
    }
}
