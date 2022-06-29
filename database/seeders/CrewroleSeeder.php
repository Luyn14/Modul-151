<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CrewroleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crewroles')->insert(
            [
                [
                    'name' => "Admiral",
                ],
                [
                    'name' => "Commander",
                ],
                [
                    'name' => "Captain",
                ],
                [
                    'name' => "Soldier",
                ],
                [
                    'name' => "Mechanic",
                ],
                [
                    'name' => "Worker",
                ],
            ]
        );
    }
}
