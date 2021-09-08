<?php

namespace App\Http\Requests\Admin\HomepageValues;

use Illuminate\Foundation\Http\FormRequest;

class AddValueRequest extends FormRequest
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
            'headline' => "required|string|max:255",
            'description' => "required",
            'icon' => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ];
    }
}
