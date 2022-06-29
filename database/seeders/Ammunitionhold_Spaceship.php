<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Ammunitionhold_Spaceship extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ammunitionhold_spaceship')->insert(
            [
                [
                    'spaceship_id' => 1,
                    'ammunitionhold_id' => 4,
                    'amount' => 20000
                ],
                [
                    'spaceship_id' => 1,
                    'ammunitionhold_id' => 5,
                    'amount' => 250
                ],
                [
                    'spaceship_id' => 1,
                    'ammunitionhold_id' => 6,
                    'amount' => 150
                ],
                [
                    'spaceship_id' => 1,
                    'ammunitionhold_id' => 7,
                    'amount' => 150
                ],
                [
                    'spaceship_id' => 1,
                    'ammunitionhold_id' => 9,
                    'amount' => 50
                ],
                [
                    'spaceship_id' => 2,
                    'ammunitionhold_id' => 2,
                    'amount' => 15000
                ],
                [
                    'spaceship_id' => 2,
                    'ammunitionhold_id' => 5,
                    'amount' => 150
                ],
                [
                    'spaceship_id' => 2,
                    'ammunitionhold_id' => 6,
                    'amount' => 100
                ],
                [
                    'spaceship_id' => 2,
                    'ammunitionhold_id' => 7,
                    'amount' => 120
                ],
                [
                    'spaceship_id' => 2,
                    'ammunitionhold_id' => 8,
                    'amount' => 60
                ],
                [
                    'spaceship_id' => 3,
                    'ammunitionhold_id' => 2,
                    'amount' => 12000
                ],
                [
                    'spaceship_id' => 3,
                    'ammunitionhold_id' => 5,
                    'amount' => 200
                ],
                [
                    'spaceship_id' => 3,
                    'ammunitionhold_id' => 6,
                    'amount' => 150
                ],
                [
                    'spaceship_id' => 3,
                    'ammunitionhold_id' => 7,
                    'amount' => 100
                ],
                [
                    'spaceship_id' => 3,
                    'ammunitionhold_id' => 8,
                    'amount' => 40
                ],
                [
                    'spaceship_id' => 4,
                    'ammunitionhold_id' => 9,
                    'amount' => 50
                ],
            ]
        );
    }
}
