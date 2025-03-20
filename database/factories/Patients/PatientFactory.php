<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Factories\Patients;

use App\Models\Patients\Patient;
use App\Models\Demographics\Personal;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition(): array
    {
        return [
            // 'pid' => $this->faker->randomNumber(),
            'eid' => $this->faker->randomNumber(),
            'personal_id' => Personal::factory(),
            'last_visited' => null,
        ];
    }
}
