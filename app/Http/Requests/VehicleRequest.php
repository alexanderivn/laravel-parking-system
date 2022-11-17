<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'plate_number' => ['required', 'string'],
            'clock_in' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}