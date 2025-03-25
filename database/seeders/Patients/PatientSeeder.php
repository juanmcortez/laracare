<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Seeders\Patients;

use Illuminate\Database\Seeder;
use App\Models\Patients\Patient;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        Patient::factory($faker->randomNumber('4'))->create();
    }
}
