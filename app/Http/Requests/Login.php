<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'username' => 'required|string',
            'password' => 'required|min:6|string'
        ];
    }
}
