<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Seeders\Users;

use App\Models\Users\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create users and patients
        User::factory()->create([
            'is_active' => true,
            'username' => 'superadmin',
            'email' => 'test@example.com',
        ]);

        $faker = \Faker\Factory::create();
        User::factory($faker->randomNumber('2'))->create();
    }
}
