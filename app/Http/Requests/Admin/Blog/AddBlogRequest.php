<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class AddBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'headline' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'source_name' => 'required|string|max:255',
            'source_link' => 'required|string|max:255',
            'description' => 'required',
            'content' => 'required',
            'cover' => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            'meta_title' => "nullable",
            'meta_description' => "nullable",
            'meta_keywords' => "nullable",
        ];
    }
}
