<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ShipequipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipequipments')->insert(
            [
                [
                    'name' => "Shieldgenerator",
                    'size' => "1"
                ],
                [
                    'name' => "Shieldgenerator",
                    'size' => "2"
                ],
                [
                    'name' => "Shieldgenerator",
                    'size' => "3"
                ],
                [
                    'name' => "Shieldgenerator",
                    'size' => "4"
                ],
                [
                    'name' => "Cooler",
                    'size' => "1"
                ],
                [
                    'name' => "Cooler",
                    'size' => "2"
                ],
                [
                    'name' => "Cooler",
                    'size' => "3"
                ],
                [
                    'name' => "Cooler",
                    'size' => "4"
                ],
                [
                    'name' => "Power-Plant",
                    'size' => "1"
                ],
                [
                    'name' => "Power-Plant",
                    'size' => "2"
                ],
                [
                    'name' => "Power-Plant",
                    'size' => "3"
                ],
                [
                    'name' => "Power-Plant",
                    'size' => "4"
                ],
                [
                    'name' => "Laser-Repeater",
                    'size' => "1"
                ],
                [
                    'name' => "Laser-Repeater",
                    'size' => "2"
                ],
                [
                    'name' => "Laser-Repeater",
                    'size' => "3"
                ],
                [
                    'name' => "Laser-Repeater",
                    'size' => "4"
                ],
                [
                    'name' => "Gatling-Gun",
                    'size' => "1"
                ],
                [
                    'name' => "Gatling-Gun",
                    'size' => "2"
                ],
                [
                    'name' => "Gatling-Gun",
                    'size' => "3"
                ],
                [
                    'name' => "Gatling-Gun",
                    'size' => "4"
                ],
                [
                    'name' => "Heat-Missile",
                    'size' => "1"
                ],
                [
                    'name' => "Heat-Missile",
                    'size' => "2"
                ],
                [
                    'name' => "Heat-Missile",
                    'size' => "3"
                ],
                [
                    'name' => "Heat-Missile",
                    'size' => "4"
                ],
                [
                    'name' => "Flair-Launcher",
                    'size' => "1"
                ],
                [
                    'name' => "Flair-Launcher",
                    'size' => "2"
                ]
            ]
        );
    }
}
