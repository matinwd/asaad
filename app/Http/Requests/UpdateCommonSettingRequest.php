<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommonSettingRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'en.title' => 'required',
            'de.title' => 'required',
            'en.description' => 'required',
            'de.description' => 'required',
            'en.address' => 'required',
            'de.address' => 'required',
            'logo' => 'nullable',

        ];
    }

    public function messages()
    {
        return [
            'en.title.required' => 'The En Title field is required',
            'en.address.required' => 'The En Address field is required',
            'en.description.required' => 'The En Description field is required',
            'de.title.required' => 'The De Title field is required',
            'de.description.required' => 'The De Description field is required',
            'de.address.required' => 'The De Address field is required',
        ];
    }
}
