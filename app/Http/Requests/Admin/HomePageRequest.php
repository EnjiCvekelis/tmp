<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HomePageRequest extends FormRequest
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

    public function attributes()
    {
        return [
            'main_headline' => 'Color Name',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => "",
            'main_headline' => "required|string|max:255",
            'main_subheadline' => "required|string|max:255",
            'main_link' => "required|string|max:255",
            'office_headline' => "required|string|max:255",
            'office_subheadline' => "required|string|max:255",
            'office_text' => "required|string",
            'office_link' => "required|string|max:255",
            'services_headline' => "required|string|max:255",
            'services_subheadline' => "required|string|max:255",
            'services_text' => "required|string",
            'values_headline' => "required|string|max:255",
            'values_subheadline' => "required|string|max:255",
            'portfolio_headline' => "required|string|max:255",
            'portfolio_subheadline' => "required|string|max:255",
            'portfolio_link' => "required|string|max:255",
            'blog_headline' => "required|string|max:255",
            'blog_subheadline' => "required|string|max:255",
            'blog_link' => "required|string|max:255",
            'meta_title' => "nullable",
            'meta_description' => "nullable",
            'meta_keywords' => "nullable",
        ];
    }
}
