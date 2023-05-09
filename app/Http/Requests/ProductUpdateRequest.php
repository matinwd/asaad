<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'en.*' => 'required',
            'de.*' => 'required',
            'slug' => 'required|min:3|unique:products,id,' . $this->id,
            'tags' => 'required',
            'images.*' => 'nullable|mimes:jpg,jpeg,png,svg',
            'visibility' => 'required|in:0,1',
            'price_status' => 'required|in:0,1,2,3',
            'price' => 'required_if:price_status,1',
            'discount'=> 'nullable|numeric',
            'discount_type' => 'nullable|in:percent,fixed',
            'special_price' => 'nullable|numeric',
            'special_price_type' => 'nullable|in:percent,fixed',
            'special_price_start' => 'nullable|date',
            'special_price_end' => 'nullable|date',
            'properties' => 'nullable',

        ];
    }

    public function messages() :array
    {
        return [
            'en.return_policy.required' => trans('The English return policy field is required.'),
            'en.description.required' => trans('The English description field is required.'),
            'en.name.required' => trans('The English name field is required.'),
            'de.return_policy.required' => trans('The Dutch return policy field is required.'),
            'de.description.required' => trans('The Dutch description field is required.'),
            'de.name.required' => trans('The Dutch name field is required.'),
            'price.required_if' => trans('The price field is required when price status is Normal'),
        ];
    }
}
