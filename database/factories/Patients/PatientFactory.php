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
        $random_date = $this->faker->dateTimeBetween('-1 year', '-1 hour');
        return [
            // 'pid' => $this->faker->randomNumber(),
            'eid' => $this->faker->randomNumber(),
            'personal_id' => Personal::factory()->create(['created_at' => $random_date, 'updated_at' => $random_date]),
            'last_visited' => null,
            'created_at' => $random_date,
            'updated_at' => $random_date,
        ];
    }
}
