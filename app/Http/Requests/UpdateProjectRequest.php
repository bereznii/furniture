<?php

namespace App\Http\Requests;

use App\Models\CategoryProject;
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
        $project = CategoryProject::find(request('projectId'));

        return [
            'category' => 'required|string',
            'name' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:50000',
            'meta_keywords' => 'nullable|string|max:50000',
            'meta_description' => 'nullable|string|max:50000',
            'description' => 'nullable|string',
            'backgroundImage' => $project->hasMedia('backgroundImage')
                ? ''
                : 'required|file|max:5120',
            'primaryImage' => $project->hasMedia('primaryImage')
                ? ''
                : 'required|file|max:5120',
            'secondaryImage.*' => 'nullable|image|max:5120',
        ];
    }
}
