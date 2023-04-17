<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidPasswordRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $pattern = '/^(?=.*[A-Za-z])(?=.*\d)/'; // regular expression pattern
        if (preg_match($pattern, $value)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Password should have constraints (at least 8 characters, should contain at least 1 number, at least 1 alphabet)';
    }
}
