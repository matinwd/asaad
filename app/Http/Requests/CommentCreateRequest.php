<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'post_id' => 'required_if:comment_section,post',
            'name' => 'required:min:2',
            'comment_section' => 'required|in:main,post',
            'images' => 'required|mimes:svg,png,jpeg,jpg',
            'description' => 'required:min:2',
        ];
    }
}
