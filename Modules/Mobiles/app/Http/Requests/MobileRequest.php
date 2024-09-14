<?php

namespace Modules\Mobiles\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MobileRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string'
            ]
        ];
    }
}
