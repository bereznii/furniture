<?php

namespace App\Http\Requests;

use App\Rules\NotInArray;
use Illuminate\Foundation\Http\FormRequest;

class CallbackRequest extends FormRequest
{
    private const BLACKLIST_NAME = [
        'henryvef',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->redirect = '/#contact-form';

        return [
            'name' => [
                'required',
                'string',
                'max:255',
                new NotInArray(self::BLACKLIST_NAME)
            ],
            'phone' => 'required|string|max:255',
            'message' => 'nullable|string|max:50000',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => "Вкажіть Ваше ім'я",
            'name.max' => 'Максимальна довжина поля 255 символів',
            'phone.required' => 'Вкажіть номер телефону',
            'phone.max' => 'Максимальна довжина поля 255 символів',
            'message.max' => 'Максимальна довжина поля 50000 символів',
        ];
    }
}
