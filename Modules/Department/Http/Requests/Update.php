<?php

namespace Modules\Department\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class Update extends FormRequest
{
    public function rules(Request $request)
    {
        return [
            'department_tag'  => 'sometimes|string|unique:departments,department_id,'.$request->department_id.',department_id|max:4|min:2',
            'department_name' => 'sometimes|string|min:6',
            'department_max'  => 'sometimes|numeric'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
