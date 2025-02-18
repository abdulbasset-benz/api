<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'breed' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => 'the name is required nigga',
            'name.string' => 'the name must be a string nigga',
            'name.max' => 'the name must be less than 255 characters',
            'breed.required' => 'the breed is required nigga',
            'breed.string' => 'the breed must be a string nigga',
            'breed.max' => 'the breed must be less than 255 characters',
        ];
    }
}