<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'en.name' => 'required|min:5',
            'de.name' => 'required|min:5',
            'images' => 'nullable|mimes:svg,png,jpeg,jpg',
            'visibility' => 'required|in:1,2',
            'order' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'en.name.required' => 'The English name field is required',
            'de.name.required' => 'The Dutch name field is required',
        ];
    }
}
