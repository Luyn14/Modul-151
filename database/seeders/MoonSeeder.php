<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('moons')->insert(
            [
                [
                    'name' => "Planetside",
                ],
                [
                    'name' => "Moon",
                ],
                [
                    'name' => "Phobos",
                ],
                [
                    'name' => "Deimos",
                ],
                [
                    'name' => "Ganymed",
                ],
                [
                    'name' => "Kallisto",
                ],
                [
                    'name' => "Io",
                ],
                [
                    'name' => "Europa",
                ],
                [
                    'name' => "Titan",
                ],
                [
                    'name' => "Rhea",
                ],
                [
                    'name' => "Iapetus",
                ],
                [
                    'name' => "Dione",
                ],
                [
                    'name' => "Titania",
                ],
                [
                    'name' => "Oberon",
                ],
                [
                    'name' => "Umbriel",
                ],
                [
                    'name' => "Ariel",
                ],
                [
                    'name' => "Triton",
                ],
                [
                    'name' => "Proteus",
                ],
                [
                    'name' => "Nereid",
                ],
                [
                    'name' => "Charon",
                ]

            ]
        );
    }
}
