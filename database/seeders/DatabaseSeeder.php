<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Seeders;

use App\Models\Users\User;
use Illuminate\Database\Seeder;
use App\Models\Patients\Patient;

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
            CountriesStatesSeeder::class
        ]);

        // Create users and patients
        User::factory()->create([
            'is_active' => true,
            'username' => 'superadmin',
            'email' => 'test@example.com',
        ]);

        User::factory(14)->create();

        Patient::factory(50)->create();
    }
}
