<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'category' => 'required|string',
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'backgroundImage' => 'required|file|max:5120',
            'primaryImage' => 'required|file|max:5120',
            'secondaryImage.*' => 'nullable|image|max:5120',
        ];
    }
}
