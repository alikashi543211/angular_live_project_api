<?php

namespace App\Http\Requests\Api\Auth;

use App\Http\Requests\BaseRequest;
use App\Rules\ValidPasswordRule;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends BaseRequest
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
            'full_name' => 'required|min:3|max:200',
            'email' => 'required|email:rfc,dns',
            'password' => ['required', 'string', 'min:8', new ValidPasswordRule(), 'confirmed'],
        ];
    }
}
