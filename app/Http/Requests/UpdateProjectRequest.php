<?php

namespace App\Http\Requests;

use App\Models\CategoryProject;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('category_projects')->ignore($project->id),
                'regex:/^[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*$/'
            ],
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.max' => 'Максимальная длина поля 255 символов',
            'description.max' => 'Максимальная длина поля 50000 символов',
            'backgroundImage.required' => 'Добавьте фоновое фото',
            'primaryImage.required' => 'Добавьте основное фото',
            'slug.required' => 'Добавьте Slug',
            'slug.unique' => 'Slug должен быть уникальным',
            'slug.regex' => 'Slug должен быть в правильном формате',
            'backgroundImage.max' => 'Максимальный дополнительного размер фото 5МБ',
            'primaryImage.max' => 'Максимальный дополнительного размер фото 5МБ',
            'secondaryImage.max' => 'Максимальный дополнительного азмер фото 5МБ',
            'meta_title.max' => 'Максимальная длина мета заголовка страницы 50000 символов',
            'meta_keywords.max' => 'Максимальная длина мета ключевых слов 50000 символов',
            'meta_description.max' => 'Максимальная длина мета описания 50000 символов',
        ];
    }
}
