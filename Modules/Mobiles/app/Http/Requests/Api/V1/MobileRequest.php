<?php

namespace Modules\Mobiles\Http\Requests\Api\V1;

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
