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
    protected $appends = ['full_name'];

    /**
     * Get the user's first name.
     */
    protected function fullName(): Attribute
    {
        $fullName = Str::of($this->last_name)->lower()->ucfirst();
        $fullName .= ', ';
        $fullName .= Str::of($this->first_name)->lower()->ucfirst();
        $fullName .= ' ';
        $fullName .= Str::of($this->middle_name)->lower()->ucfirst();
        return Attribute::make(
            get: fn() => $fullName,
        );
    }

    /**
     * Get the user's first name.
     */
    protected function dateOfBirth(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value) => Carbon::parse($value)->format('M d, Y'),
        );
    }
}
