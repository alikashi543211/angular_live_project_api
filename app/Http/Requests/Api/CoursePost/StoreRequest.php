<?php

namespace App\Http\Requests\Api\CoursePost;

use App\Http\Requests\BaseRequest;

class StoreRequest extends BaseRequest
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
            'title' => 'required',
            'short_desc' => 'required',
            'full_desc' => 'required',
            'image' => 'nullable|file|mimes:png,jpg',
            'author' => 'required',
            'is_active' => 'required|in:0,1',
        ];
    }
}
