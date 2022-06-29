<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Cargo_Spaceship extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargo_spaceship')->insert(
            [
                [
                    'spaceship_id' => 1,
                    'cargohold_id' => 1,
                    'amount' => 15000
                ],
                [
                    'spaceship_id' => 1,
                    'cargohold_id' => 2,
                    'amount' => 6000
                ],
                [
                    'spaceship_id' => 1,
                    'cargohold_id' => 3,
                    'amount' => 3000
                ],
                [
                    'spaceship_id' => 1,
                    'cargohold_id' => 4,
                    'amount' => 300
                ],
                [
                    'spaceship_id' => 1,
                    'cargohold_id' => 7,
                    'amount' => 20000
                ],
                [
                    'spaceship_id' => 1,
                    'cargohold_id' => 8,
                    'amount' => 5000
                ],
                [
                    'spaceship_id' => 2,
                    'cargohold_id' => 1,
                    'amount' => 10000
                ],
                [
                    'spaceship_id' => 2,
                    'cargohold_id' => 2,
                    'amount' => 3000
                ],
                [
                    'spaceship_id' => 2,
                    'cargohold_id' => 3,
                    'amount' => 6000
                ],
                [
                    'spaceship_id' => 2,
                    'cargohold_id' => 4,
                    'amount' => 500
                ],
                [
                    'spaceship_id' => 2,
                    'cargohold_id' => 6,
                    'amount' => 10000
                ],
                [
                    'spaceship_id' => 2,
                    'cargohold_id' => 8,
                    'amount' => 10000
                ],
                [
                    'spaceship_id' => 3,
                    'cargohold_id' => 1,
                    'amount' => 8000
                ],
                [
                    'spaceship_id' => 3,
                    'cargohold_id' => 2,
                    'amount' => 2000
                ],
                [
                    'spaceship_id' => 3,
                    'cargohold_id' => 3,
                    'amount' => 3000
                ],
                [
                    'spaceship_id' => 3,
                    'cargohold_id' => 4,
                    'amount' => 250
                ],
                [
                    'spaceship_id' => 3,
                    'cargohold_id' => 7,
                    'amount' => 8000
                ],
                [
                    'spaceship_id' => 3,
                    'cargohold_id' => 8,
                    'amount' => 9000
                ],
                [
                    'spaceship_id' => 4,
                    'cargohold_id' => 1,
                    'amount' => 35000
                ],
                [
                    'spaceship_id' => 4,
                    'cargohold_id' => 2,
                    'amount' => 9000
                ],
                [
                    'spaceship_id' => 4,
                    'cargohold_id' => 3,
                    'amount' => 5000
                ],
                [
                    'spaceship_id' => 4,
                    'cargohold_id' => 4,
                    'amount' => 200
                ],
                [
                    'spaceship_id' => 4,
                    'cargohold_id' => 5,
                    'amount' => 6000
                ],
                [
                    'spaceship_id' => 4,
                    'cargohold_id' => 6,
                    'amount' => 600
                ],
                [
                    'spaceship_id' => 4,
                    'cargohold_id' => 7,
                    'amount' => 16000
                ],
                [
                    'spaceship_id' => 4,
                    'cargohold_id' => 8,
                    'amount' => 12000
                ],
            ]
        );
    }
}
