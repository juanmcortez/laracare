<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Helpers;

use App\Models\Commons\Country;
use Illuminate\Support\Collection;
use App\Models\Commons\CountryState;
use Illuminate\Support\Facades\Cache;

class CountryStateHelper
{
    /**
     * Cache duration in seconds (1 day)
     */
    private const CACHE_DURATION = 86400;

    /**
     * Get all available countries
     *
     * @return Collection
     */
    public static function getCountries(): Collection
    {
        return Cache::remember('countries', self::CACHE_DURATION, function () {
            return Country::orderBy('name')->get();
        });
    }

    /**
     * Get countries as an associative array with code => name format
     *
     * @return array
     */
    public static function getCountriesArray(): array
    {
        return Cache::remember('countries_array', self::CACHE_DURATION, function () {
            return Country::orderBy('name')
                ->pluck('name', 'code')
                ->toArray();
        });
    }

    /**
     * Get a country by its code
     *
     * @param  string  $code
     * @return Country|null
     */
    public static function getCountry(string $code): ?Country
    {
        return Cache::remember("country_{$code}", self::CACHE_DURATION, function () use ($code) {
            return Country::find($code);
        });
    }

    /**
     * Get all states/provinces for a specific country
     *
     * @param  string  $countryCode
     * @return Collection
     */
    public static function getStates(string $countryCode): Collection
    {
        return Cache::remember("states_{$countryCode}", self::CACHE_DURATION, function () use ($countryCode) {
            return CountryState::where('country_code', $countryCode)
                ->orderBy('name')
                ->get();
        });
    }

    /**
     * Get states as an associative array with code => name format
     *
     * @param  string  $countryCode
     * @return array
     */
    public static function getStatesArray(string $countryCode): array
    {
        return Cache::remember("states_array_{$countryCode}", self::CACHE_DURATION, function () use ($countryCode) {
            return CountryState::where('country_code', $countryCode)
                ->orderBy('name')
                ->pluck('name', 'code')
                ->toArray();
        });
    }

    /**
     * Get a specific state by its code and country code
     *
     * @param  string  $countryCode
     * @param  string  $stateCode
     * @return CountryState|null
     */
    public static function getState(string $countryCode, string $stateCode): ?CountryState
    {
        return Cache::remember("state_{$countryCode}_{$stateCode}", self::CACHE_DURATION, function () use ($countryCode, $stateCode) {
            return CountryState::where('country_code', $countryCode)
                ->where('code', $stateCode)
                ->first();
        });
    }

    /**
     * Get all countries with their states/provinces
     *
     * @return Collection
     */
    public static function getAllCountriesWithStates(): Collection
    {
        return Cache::remember('countries_with_states', self::CACHE_DURATION, function () {
            return Country::with('states')->orderBy('name')->get();
        });
    }

    /**
     * Check if a country exists
     *
     * @param  string  $countryCode
     * @return bool
     */
    public static function countryExists(string $countryCode): bool
    {
        return Cache::remember("country_exists_{$countryCode}", self::CACHE_DURATION, function () use ($countryCode) {
            return Country::where('code', $countryCode)->exists();
        });
    }

    /**
     * Check if a state exists within a country
     *
     * @param  string  $countryCode
     * @param  string  $stateCode
     * @return bool
     */
    public static function stateExists(string $countryCode, string $stateCode): bool
    {
        return Cache::remember("state_exists_{$countryCode}_{$stateCode}", self::CACHE_DURATION, function () use ($countryCode, $stateCode) {
            return CountryState::where('country_code', $countryCode)
                ->where('code', $stateCode)
                ->exists();
        });
    }

    /**
     * Clear all country and state caches
     */
    public static function clearCache(): void
    {
        Cache::forget('countries');
        Cache::forget('countries_array');
        Cache::forget('countries_with_states');

        // Get all countries to clear their specific caches
        $countries = Country::all();

        foreach ($countries as $country) {
            Cache::forget("country_{$country->code}");
            Cache::forget("country_exists_{$country->code}");
            Cache::forget("states_{$country->code}");
            Cache::forget("states_array_{$country->code}");

            // Clear state-specific caches
            $states = CountryState::where('country_code', $country->code)->get();
            foreach ($states as $state) {
                Cache::forget("state_{$country->code}_{$state->code}");
                Cache::forget("state_exists_{$country->code}_{$state->code}");
            }
        }
    }
}
