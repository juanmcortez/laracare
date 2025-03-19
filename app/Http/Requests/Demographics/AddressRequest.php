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

class AddressRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'street_name' => ['nullable'],
            'street_name_extended' => ['nullable'],
            'city' => ['nullable'],
            'state' => ['nullable'],
            'postal_code' => ['nullable'],
            'country_code' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
