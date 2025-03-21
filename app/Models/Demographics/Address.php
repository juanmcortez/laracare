<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Models\Demographics;

use App\Helpers\CountryStateHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'demographics_addresses';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'street_name',
        'street_name_extended',
        'city',
        'state',
        'postal_code',
        'country_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['state_name', 'country_name'];

    /**
     * Get the address's state.
     */
    protected function StateName(): Attribute
    {
        $country_states = CountryStateHelper::getStatesArray($this->country_code);
        return Attribute::make(
            get: fn() => $country_states[$this->state],
        );
    }

    /**
     * Get the address's country.
     */
    protected function CountryName(): Attribute
    {
        return Attribute::make(
            get: fn() => CountryStateHelper::getCountry($this->country_code)->name,
        );
    }
}
