<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

class Create extends FormRequest
{
    public function rules()
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });

        return [
            'user_name' => 'sometimes|string|min:6|without_spaces|unique:users,user_name',
            'password'  => 'sometimes|string|min:6|confirmed',
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages() {
        return [
            'without_spaces' => 'Username tidak boleh menggunakan spasi',
        ];
    }

}
