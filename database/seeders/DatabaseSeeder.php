<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CrewroleSeeder::class,
            SpaceshiproleSeeder::class,
            ShipequipmentSeeder::class,
            CargoholdSeeder::class,
            AmmunitionholdSeeder::class,
            MoonSeeder::class,
            DestinationSeeder::class,
            FleetSeeder::class,
            DivisionSeeder::class,
            DestinationMoon::class,
            SpaceshipSeeder::class,
            CrewSeeder::class,
            Shipequipment_Spaceship::class,
            Cargo_Spaceship::class,
            Ammunitionhold_Spaceship::class,
        ]);
    }
}
