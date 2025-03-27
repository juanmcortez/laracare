<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Models\Patients;

use App\Models\Demographics\Personal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'pid';

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'pid';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'pid',
        'eid',
        'personal_id',
        'last_visited',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'personal_id',
        'last_visited',
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
            'last_visited' => 'datetime',
        ];
    }

    /**
     * Get the phone associated with the user.
     *
     * @return HasOne
     */
    public function demographic(): HasOne
    {
        return $this->hasOne(Personal::class, 'id', 'personal_id');
    }
}
