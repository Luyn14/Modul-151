<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Crew_Spaceship extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crew_spaceship')->insert(
            [
                [
                    'crew_id' => 1,
                    'spaceship_id' => 1
                ],
                [
                    'crew_id' => 2,
                    'spaceship_id' => 1
                ],
                [
                    'crew_id' => 3,
                    'spaceship_id' => 2
                ],
                [
                    'crew_id' => 4,
                    'spaceship_id' => 1
                ],
                [
                    'crew_id' => 5,
                    'spaceship_id' => 2
                ],
                [
                    'crew_id' => 6,
                    'spaceship_id' => 3
                ],
                [
                    'crew_id' => 7,
                    'spaceship_id' => 4
                ],
            ]
        );
    }
}
