<?php

namespace Modules\Department\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
{
    public function rules()
    {
        return [
            'department_tag'  => 'sometimes|string|unique:departments|max:4|min:2',
            'department_name' => 'sometimes|string|min:6',
            'department_max'  => 'sometimes|numeric'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
