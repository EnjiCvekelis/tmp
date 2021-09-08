<?php

namespace App\Http\Requests\Admin\Project;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'description' => 'required',
            'content' => 'required',
            'project_category_id' => 'required',
            'meta_title' => "nullable",
            'meta_description' => "nullable",
            'meta_keywords' => "nullable",
        ];
    }
}
