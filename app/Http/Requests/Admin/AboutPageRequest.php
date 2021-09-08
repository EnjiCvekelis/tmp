<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutPageRequest extends FormRequest
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
            'buro_headline' => 'Color Name',
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
            'buro_headline' => "required|string|max:255",
            'buro_text' => "required|string",
            'approach_headline' => "required|string|max:255",
            'approach_text' => "required|string",
            'project_headline' => "required|string|max:255",
            'project_text' => "required|string",
            'philosophy_headline' => "required|string|max:255",
            'philosophy_text' => "required|string",
            'meta_title' => "nullable",
            'meta_description' => "nullable",
            'meta_keywords' => "nullable",
        ];
    }
}
