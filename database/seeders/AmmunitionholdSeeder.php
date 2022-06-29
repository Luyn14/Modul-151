<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmmunitionholdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ammunitionholds')->insert(
            [
                [
                    'name' => "Ballistic-Ammuniton (Size 1)",
                ],
                [
                    'name' => "Ballistic-Ammuniton (Size 2)",
                ],
                [
                    'name' => "Ballistic-Ammuniton (Size 3)",
                ],
                [
                    'name' => "Ballistic-Ammuniton (Size 4)",
                ],
                [
                    'name' => "9mm-Magazin",
                ],
                [
                    'name' => "5,56x45-Magazin",
                ],
                [
                    'name' => "7,62x39-Magazin",
                ],
                [
                    'name' => "Flair (Size 1)",
                ],
                [
                    'name' => "Flair (Size 2)",
                ],
            ]
        );
    }
}
