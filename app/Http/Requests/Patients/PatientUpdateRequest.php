<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Http\Requests\Patients;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PatientUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return boolean
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the base validation rules
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'pid' => ['unique:patients'],
            'eid' => ['nullable', 'max:64'],
            'last_visited' => ['nullable', 'date'],
            //
            'demographic.title' => ['nullable', 'string', 'max:8'],
            'demographic.first_name' => ['required', 'string', 'max:64'],
            'demographic.middle_name' => ['nullable', 'string', 'max:64'],
            'demographic.last_name' => ['required', 'string', 'max:64'],
            'demographic.date_of_birth' => ['nullable', 'date', 'before:today'],
            'demographic.gender' => ['nullable', 'max:16', Rule::in(['male', 'female', 'other'])],
            'demographic.social_security' => ['nullable', 'string', 'max:16'],
            'demographic.license' => ['nullable', 'string', 'max:16'],
            //
            'demographic.address.street_name' => ['nullable', 'max:128'],
            'demographic.address.street_name_extended' => ['nullable', 'max:128'],
            'demographic.address.city' => ['nullable', 'max:64'],
            'demographic.address.state' => ['nullable', 'max:4'],
            'demographic.address.postal_code' => ['nullable', 'max:64'],
            'demographic.address.country_code' => ['nullable', 'max:4'],
        ];
    }

    /**
     * Get custom error messages for validation failures.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'demographic.date_of_birth.before' => 'Date of birth must be in the past.',
            'demographic.gender.in' => 'Invalid gender selection.',
        ];
    }
}
