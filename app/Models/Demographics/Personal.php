<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Models\Demographics;

use Str;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personal extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'demographics_personals';

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['address'];

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'gender',
        'social_security',
        'license',
        'address_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'id',
        'address_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'date_of_birth' => 'date:M d, Y',
        ];
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['full_name', 'age'];

    /**
     * Get the user's full name.
     */
    protected function fullName(): Attribute
    {
        $fullName = Str::of($this->last_name)->lower()->ucfirst();
        $fullName .= ', ';
        $fullName .= Str::of($this->first_name)->lower()->ucfirst();
        if ($this->middle_name) {
            $fullName .= ' ';
            $fullName .= Str::of($this->middle_name)->lower()->ucfirst();
        }
        return Attribute::make(
            get: static fn() => $fullName,
        );
    }

    /**
     * Format the user's date of birth.
     */
    protected function dateOfBirth(): Attribute
    {
        return Attribute::make(
            get: static fn(mixed $value) => Carbon::parse($value)->format('M d, Y'),
        );
    }

    /**
     * Get the user's age based on date_of_birth.
     */
    protected function age(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::parse($this->date_of_birth)->age,
        );
    }

    /**
     * Get the address associated with the demographics.
     */
    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'id', 'address_id')->withDefault();
    }
}
