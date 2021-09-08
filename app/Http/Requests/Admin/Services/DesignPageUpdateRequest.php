<?php

namespace App\Http\Requests\Admin\Services;

use Illuminate\Foundation\Http\FormRequest;

class DesignPageUpdateRequest extends FormRequest
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
            'first_text' => "required|string",
            'first_image' => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            'first_headline' => "required|string|max:255",
            'second_headline' => "required|string|max:255",
            'second_subheadline' => "required|string|max:255",
            'headline' => "required|string|max:255",
            'description' => "required|string",
            'meta_title' => "nullable",
            'meta_description' => "nullable",
            'meta_keywords' => "nullable",
        ];
    }
}
