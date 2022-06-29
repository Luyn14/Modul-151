<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Shipequipment_Spaceship extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipequipment_spaceship')->insert(
            [
                [
                    'spaceship_id' => 1,
                    'shipequipment_id' => 4,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 1,
                    'shipequipment_id' => 5,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 1,
                    'shipequipment_id' => 9,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 1,
                    'shipequipment_id' => 13,
                    'amount' => 4
                ],
                [
                    'spaceship_id' => 1,
                    'shipequipment_id' => 21,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 1,
                    'shipequipment_id' => 23,
                    'amount' => 4
                ],
                [
                    'spaceship_id' => 1,
                    'shipequipment_id' => 26,
                    'amount' => 1
                ],
                [
                    'spaceship_id' => 2,
                    'shipequipment_id' => 2,
                    'amount' => 4
                ],
                [
                    'spaceship_id' => 2,
                    'shipequipment_id' => 5,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 2,
                    'shipequipment_id' => 9,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 2,
                    'shipequipment_id' => 13,
                    'amount' => 4
                ],
                [
                    'spaceship_id' => 2,
                    'shipequipment_id' => 19,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 2,
                    'shipequipment_id' => 22,
                    'amount' => 4
                ],
                [
                    'spaceship_id' => 2,
                    'shipequipment_id' => 26,
                    'amount' => 1
                ],
                [
                    'spaceship_id' => 3,
                    'shipequipment_id' => 2,
                    'amount' => 4
                ],
                [
                    'spaceship_id' => 3,
                    'shipequipment_id' => 6,
                    'amount' => 3
                ],
                [
                    'spaceship_id' => 3,
                    'shipequipment_id' => 9,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 3,
                    'shipequipment_id' => 13,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 3,
                    'shipequipment_id' => 19,
                    'amount' => 4
                ],
                [
                    'spaceship_id' => 3,
                    'shipequipment_id' => 22,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 3,
                    'shipequipment_id' => 25,
                    'amount' => 1
                ],
                [
                    'spaceship_id' => 4,
                    'shipequipment_id' => 2,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 4,
                    'shipequipment_id' => 6,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 4,
                    'shipequipment_id' => 10,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 4,
                    'shipequipment_id' => 14,
                    'amount' => 2
                ],
                [
                    'spaceship_id' => 4,
                    'shipequipment_id' => 23,
                    'amount' => 4
                ],
                [
                    'spaceship_id' => 4,
                    'shipequipment_id' => 26,
                    'amount' => 2
                ],

            ]
        );
    }
}
