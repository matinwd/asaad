<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionCreateRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'en.*' => 'required',
            'en.name' => 'min:3',
            'de.*' => 'required',
            'de.name' => 'min:3',
            'de.description' => 'min:10',
            'en.description' => 'min:10',
        ];

    }

    public function messages()
    {
        return [
            'en.name.required' => 'The English Name is required',
            'en.name.min' => 'The English Name should be greater than 3',
            'de.name.min' => 'The Dutch Name should be greater than 3',
            'en.description.required' => 'The English Description is required',
            'en.description.min' => 'The English Description should be greater than 3',
            'de.description.min' => 'The Dutch Description should be greater than 3',
            'de.description.required' => 'The Dutch Description is required',
            'de.name.required' => 'The Dutch Name is required',
        ];
    }
}
