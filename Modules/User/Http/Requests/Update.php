<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
    public function rules()
    {
        return [
            'user_name' => 'sometimes|numeric|unique:users',
            'password'  => 'sometimes|string|min:6|confirmed'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
