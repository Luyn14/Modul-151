<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CargoholdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargoholds')->insert(
            [
                [
                    'name' => "Iron-Ore [kg]",
                ],
                [
                    'name' => "Cooper-ore [kg]",
                ],
                [
                    'name' => "Lithium-ore [kg]",
                ],
                [
                    'name' => "MRE-Pack",
                ],
                [
                    'name' => "Textile [kg]",
                ],
                [
                    'name' => "Scrap [kg]",
                ],
                [
                    'name' => "Spacesuit",
                ],
                [
                    'name' => "Water [l]",
                ],
            ]
        );
    }
}
