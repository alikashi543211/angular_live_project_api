<?php

namespace App\Http\Requests\Api\User;

use App\Http\Requests\BaseRequest;

class StoreQuestionnaireRequest extends BaseRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'questionnaire' => 'required|array',
            'questionnaire.*.question_id' => 'required|exists:questions,id',
            'questionnaire.*.option_id' => 'nullable|exists:options,id',
            'questionnaire.*.answer' => 'nullable|required_if:questionnaire.*.option_id,null|string|max:255',
        ];
    }
}
