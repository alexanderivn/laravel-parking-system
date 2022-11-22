<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckInRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'vehicle_number' => ['required', 'string'],
            'clock_in' => ['required'],

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}