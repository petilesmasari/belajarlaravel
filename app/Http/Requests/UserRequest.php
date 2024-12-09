<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'min : 3', 'max : 255', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required','min:8'],
    ];
    }
}
