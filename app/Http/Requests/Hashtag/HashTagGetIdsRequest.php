<?php

namespace App\Http\Requests\Hashtag;

use Illuminate\Foundation\Http\FormRequest;

class HashTagGetIdsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'hashtags'        => 'array|required',
            'hashtags.*.name' => 'string|required',
        ];
    }
}
