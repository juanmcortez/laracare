<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Models\Commons;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CountryState extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries_states';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country_code',
        'code',
        'name',
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
     * Get the country that owns the state.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_code', 'code');
    }
}
