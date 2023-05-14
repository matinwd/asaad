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
            'title' => 'required',
            'description' => 'required',
            'address' => 'required',
            'landline' => 'required',
            'landline2' => 'nullable',
            'fax' => 'nullable',
            'mobile' => 'required',
            'email' => 'required',
            'telegram' => 'nullable',
            'instagram' => 'nullable',
            'whatsapp' => 'nullable',
            'linkedin' => 'nullable',
            'photo' => 'nullable',
        ];
    }
}
