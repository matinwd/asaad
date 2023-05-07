<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'images' => 'nullable|mimes:jpg,png,svg',
            'en.*' => 'required',
            'de.*' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'en.name.required' => trans('The English name field is required.'),
            'en.description.required' => trans('The English description field is required.'),
            'de.name.required' => trans('The Dutch name field is required.'),
            'de.description.required' => trans('The Dutch description field is required.'),
        ];
    }
}
