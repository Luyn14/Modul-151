<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'firstname' => "Luca",
                    'lastname' => "Luu",
                    'birthday' => "23.11.75",
                    'password' => '$2y$10$xcgJgAnOAITeX/r3qyP4Qu1f5sQeNdsKPP61Zil5HCRpJaPLNVmWq',
                    'crewrolefid' => 1,
                    'shipfid' => 1,
                ],
                [
                    'firstname' => "Michael",
                    'lastname' => "Frantzes",
                    'birthday' => "9.1.77",
                    'password' => '$2y$10$xcgJgAnOAITeX/r3qyP4Qu1f5sQeNdsKPP61Zil5HCRpJaPLNVmWq',
                    'crewrolefid' => 2,
                    'shipfid' => 1,
                ],
                [
                    'firstname' => "Donald",
                    'lastname' => "Tate",
                    'birthday' => "30.3.81",
                    'password' => '$2y$10$xcgJgAnOAITeX/r3qyP4Qu1f5sQeNdsKPP61Zil5HCRpJaPLNVmWq',
                    'crewrolefid' => 2,
                    'shipfid' => 2,
                ],
                [
                    'firstname' => "Ryan",
                    'lastname' => "king",
                    'birthday' => "10.12.74",
                    'password' => '$2y$10$xcgJgAnOAITeX/r3qyP4Qu1f5sQeNdsKPP61Zil5HCRpJaPLNVmWq',
                    'crewrolefid' => 3,
                    'shipfid' => 1,
                ],
                [
                    'firstname' => "Roland",
                    'lastname' => "Sherman",
                    'birthday' => "23.11.72",
                    'password' => '$2y$10$xcgJgAnOAITeX/r3qyP4Qu1f5sQeNdsKPP61Zil5HCRpJaPLNVmWq',
                    'crewrolefid' => 3,
                    'shipfid' => 2,
                ],
                [
                    'firstname' => "Nick",
                    'lastname' => "Lauda",
                    'birthday' => "11.5.83",
                    'password' => '$2y$10$xcgJgAnOAITeX/r3qyP4Qu1f5sQeNdsKPP61Zil5HCRpJaPLNVmWq',
                    'crewrolefid' => 3,
                    'shipfid' => 2,
                ],
                [
                    'firstname' => "Nedo",
                    'lastname' => "Lui",
                    'birthday' => "3.7.69",
                    'password' => '$2y$10$xcgJgAnOAITeX/r3qyP4Qu1f5sQeNdsKPP61Zil5HCRpJaPLNVmWq',
                    'crewrolefid' => 3,
                    'shipfid' => 1,
                ],
            ]
        );
    }
}
