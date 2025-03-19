<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Http\Requests\Demographics;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['nullable'],
            'first_name' => ['required'],
            'middle_name' => ['nullable'],
            'last_name' => ['required'],
            'date_of_birth' => ['required', 'date'],
            'gender' => ['nullable'],
            'social_security' => ['nullable'],
            'license' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
