<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Factories\Demographics;

use Str;
use App\Models\Demographics\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'street_name' => $this->faker->streetAddress(),
            'street_name_extended' => $this->faker->randomElement([null, $this->faker->streetName()]),
            'city' => $this->faker->city(),
            'state' => Str::upper($this->faker->randomLetter().$this->faker->randomLetter().$this->faker->randomLetter()),
            'postal_code' => $this->faker->postcode(),
            'country_code' => Str::upper($this->faker->randomLetter().$this->faker->randomLetter()),
        ];
    }
}
