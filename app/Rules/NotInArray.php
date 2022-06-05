<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NotInArray implements Rule
{
    /** @var array */
    private array $blacklist = [];

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(array $blacklist)
    {
        $this->blacklist = $blacklist;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $value = mb_strtolower($value);
        $value = trim($value);
        $value = preg_replace('/\s/', '', $value);

        return false === in_array($value, $this->blacklist);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Вы внесены в черный список. Пожалуйста, обратитесь по телефону.';
    }
}
