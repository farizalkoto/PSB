<?php

namespace Modules\Department\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Delete extends FormRequest
{
    public function rules()
    {
        return [
            'department_id' => 'required|integer'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
