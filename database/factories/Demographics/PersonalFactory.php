<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Factories\Demographics;

use App\Models\Demographics\Address;
use App\Models\Demographics\Personal;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalFactory extends Factory
{
    protected $model = Personal::class;

    public function definition(): array
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $title = ['male' => 'mr', 'female' => 'mrs'];
        return [
            'title' => $title[$gender],
            'first_name' => $this->faker->firstName($gender),
            'middle_name' => $this->faker->randomElement([null, $this->faker->firstName($gender)]),
            'last_name' => $this->faker->lastName($gender),
            'date_of_birth' => $this->faker->dateTimeBetween('-95 years', '-3 months'),
            'gender' => $gender,
            'social_security' => $this->faker->randomElement([null, $this->faker->randomNumber(9, true)]),
            'license' => $this->faker->randomElement([null, $this->faker->randomNumber(7, true)]),
            'address_id' => $this->faker->randomElement([null, Address::factory()])
        ];
    }
}
