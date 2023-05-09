<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'slug' => 'required|min:3|unique:posts',
            'images' => 'required|array',
            'images.*' => 'image|mimes:svg,png,jpg,jpeg',
            'categories' => 'nullable|array',
            'categories.*' => 'numeric',
            'de.*' => 'required',
            'en.*' => 'required',
            'en.name' => 'min:3',
            'en.description' => 'min:10',
            'de.description' => 'min:10',
            'de.name' => 'min:3'
        ];
    }

    public function messages()
    {
        return [
            'de.name.required' => 'The Dutch name field is required',
            'en.name.required' => 'The English name field is required',
            'de.name.min' => 'The Dutch name must have at least 3 characters',
            'en.name.min' => 'The English name must have at least 3 characters',
            'de.description.required' => 'The Dutch description field is required',
            'de.tags.required' => 'The Dutch tags field is required',
            'de.description.min' => 'The Dutch description must have at least 10 characters',
            'en.description.min' => 'The English description must have at least 10 characters',
            'en.description.required' => 'The English description field is required',
            'en.tags.required' => 'The English tags field is required',

        ];
    }
}
