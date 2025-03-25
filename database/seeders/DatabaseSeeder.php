<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Users\UserSeeder;
use Database\Seeders\Patients\PatientSeeder;
use Database\Seeders\Commons\CountriesStatesSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Prefill DB with necessary info
        $this->callSilent([
            CountriesStatesSeeder::class,
            UserSeeder::class,
            PatientSeeder::class
        ]);
    }
}
