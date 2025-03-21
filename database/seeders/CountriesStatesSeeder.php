<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CountriesStatesSeeder extends Seeder
{
    public function run(): void
    {
// Insert countries
        $countries = [
            ['code' => 'US', 'name' => 'United States'],
            ['code' => 'AR', 'name' => 'Argentina'],
        ];

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'code' => $country['code'],
                'name' => $country['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Insert states
        $states = [
            // USA States
            ['country_code' => 'US', 'code' => 'AL', 'name' => 'Alabama'],
            ['country_code' => 'US', 'code' => 'AK', 'name' => 'Alaska'],
            ['country_code' => 'US', 'code' => 'AZ', 'name' => 'Arizona'],
            ['country_code' => 'US', 'code' => 'AR', 'name' => 'Arkansas'],
            ['country_code' => 'US', 'code' => 'CA', 'name' => 'California'],
            ['country_code' => 'US', 'code' => 'CO', 'name' => 'Colorado'],
            ['country_code' => 'US', 'code' => 'CT', 'name' => 'Connecticut'],
            ['country_code' => 'US', 'code' => 'DE', 'name' => 'Delaware'],
            ['country_code' => 'US', 'code' => 'FL', 'name' => 'Florida'],
            ['country_code' => 'US', 'code' => 'GA', 'name' => 'Georgia'],
            ['country_code' => 'US', 'code' => 'HI', 'name' => 'Hawaii'],
            ['country_code' => 'US', 'code' => 'ID', 'name' => 'Idaho'],
            ['country_code' => 'US', 'code' => 'IL', 'name' => 'Illinois'],
            ['country_code' => 'US', 'code' => 'IN', 'name' => 'Indiana'],
            ['country_code' => 'US', 'code' => 'IA', 'name' => 'Iowa'],
            ['country_code' => 'US', 'code' => 'KS', 'name' => 'Kansas'],
            ['country_code' => 'US', 'code' => 'KY', 'name' => 'Kentucky'],
            ['country_code' => 'US', 'code' => 'LA', 'name' => 'Louisiana'],
            ['country_code' => 'US', 'code' => 'ME', 'name' => 'Maine'],
            ['country_code' => 'US', 'code' => 'MD', 'name' => 'Maryland'],
            ['country_code' => 'US', 'code' => 'MA', 'name' => 'Massachusetts'],
            ['country_code' => 'US', 'code' => 'MI', 'name' => 'Michigan'],
            ['country_code' => 'US', 'code' => 'MN', 'name' => 'Minnesota'],
            ['country_code' => 'US', 'code' => 'MS', 'name' => 'Mississippi'],
            ['country_code' => 'US', 'code' => 'MO', 'name' => 'Missouri'],
            ['country_code' => 'US', 'code' => 'MT', 'name' => 'Montana'],
            ['country_code' => 'US', 'code' => 'NE', 'name' => 'Nebraska'],
            ['country_code' => 'US', 'code' => 'NV', 'name' => 'Nevada'],
            ['country_code' => 'US', 'code' => 'NH', 'name' => 'New Hampshire'],
            ['country_code' => 'US', 'code' => 'NJ', 'name' => 'New Jersey'],
            ['country_code' => 'US', 'code' => 'NM', 'name' => 'New Mexico'],
            ['country_code' => 'US', 'code' => 'NY', 'name' => 'New York'],
            ['country_code' => 'US', 'code' => 'NC', 'name' => 'North Carolina'],
            ['country_code' => 'US', 'code' => 'ND', 'name' => 'North Dakota'],
            ['country_code' => 'US', 'code' => 'OH', 'name' => 'Ohio'],
            ['country_code' => 'US', 'code' => 'OK', 'name' => 'Oklahoma'],
            ['country_code' => 'US', 'code' => 'OR', 'name' => 'Oregon'],
            ['country_code' => 'US', 'code' => 'PA', 'name' => 'Pennsylvania'],
            ['country_code' => 'US', 'code' => 'RI', 'name' => 'Rhode Island'],
            ['country_code' => 'US', 'code' => 'SC', 'name' => 'South Carolina'],
            ['country_code' => 'US', 'code' => 'SD', 'name' => 'South Dakota'],
            ['country_code' => 'US', 'code' => 'TN', 'name' => 'Tennessee'],
            ['country_code' => 'US', 'code' => 'TX', 'name' => 'Texas'],
            ['country_code' => 'US', 'code' => 'UT', 'name' => 'Utah'],
            ['country_code' => 'US', 'code' => 'VT', 'name' => 'Vermont'],
            ['country_code' => 'US', 'code' => 'VA', 'name' => 'Virginia'],
            ['country_code' => 'US', 'code' => 'WA', 'name' => 'Washington'],
            ['country_code' => 'US', 'code' => 'WV', 'name' => 'West Virginia'],
            ['country_code' => 'US', 'code' => 'WI', 'name' => 'Wisconsin'],
            ['country_code' => 'US', 'code' => 'WY', 'name' => 'Wyoming'],
            ['country_code' => 'US', 'code' => 'DC', 'name' => 'District of Columbia'],
            ['country_code' => 'US', 'code' => 'AS', 'name' => 'American Samoa'],
            ['country_code' => 'US', 'code' => 'GU', 'name' => 'Guam'],
            ['country_code' => 'US', 'code' => 'MP', 'name' => 'Northern Mariana Islands'],
            ['country_code' => 'US', 'code' => 'PR', 'name' => 'Puerto Rico'],
            ['country_code' => 'US', 'code' => 'VI', 'name' => 'U.S. Virgin Islands'],

            // Argentina Provinces
            ['country_code' => 'AR', 'code' => 'BA', 'name' => 'Buenos Aires'],
            ['country_code' => 'AR', 'code' => 'CT', 'name' => 'Catamarca'],
            ['country_code' => 'AR', 'code' => 'CC', 'name' => 'Chaco'],
            ['country_code' => 'AR', 'code' => 'CH', 'name' => 'Chubut'],
            ['country_code' => 'AR', 'code' => 'CB', 'name' => 'Córdoba'],
            ['country_code' => 'AR', 'code' => 'CR', 'name' => 'Corrientes'],
            ['country_code' => 'AR', 'code' => 'ER', 'name' => 'Entre Ríos'],
            ['country_code' => 'AR', 'code' => 'FO', 'name' => 'Formosa'],
            ['country_code' => 'AR', 'code' => 'JY', 'name' => 'Jujuy'],
            ['country_code' => 'AR', 'code' => 'LP', 'name' => 'La Pampa'],
            ['country_code' => 'AR', 'code' => 'LR', 'name' => 'La Rioja'],
            ['country_code' => 'AR', 'code' => 'MZ', 'name' => 'Mendoza'],
            ['country_code' => 'AR', 'code' => 'MN', 'name' => 'Misiones'],
            ['country_code' => 'AR', 'code' => 'NQ', 'name' => 'Neuquén'],
            ['country_code' => 'AR', 'code' => 'RN', 'name' => 'Río Negro'],
            ['country_code' => 'AR', 'code' => 'SA', 'name' => 'Salta'],
            ['country_code' => 'AR', 'code' => 'SJ', 'name' => 'San Juan'],
            ['country_code' => 'AR', 'code' => 'SL', 'name' => 'San Luis'],
            ['country_code' => 'AR', 'code' => 'SC', 'name' => 'Santa Cruz'],
            ['country_code' => 'AR', 'code' => 'SF', 'name' => 'Santa Fe'],
            ['country_code' => 'AR', 'code' => 'SE', 'name' => 'Santiago del Estero'],
            ['country_code' => 'AR', 'code' => 'TF', 'name' => 'Tierra del Fuego'],
            ['country_code' => 'AR', 'code' => 'TM', 'name' => 'Tucumán'],
            ['country_code' => 'AR', 'code' => 'CF', 'name' => 'Ciudad Autónoma de Buenos Aires'],
        ];

        foreach ($states as $state) {
            DB::table('countries_states')->insert([
                'country_code' => $state['country_code'],
                'code' => $state['code'],
                'name' => $state['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
