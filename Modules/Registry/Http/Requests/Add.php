<?php

namespace Modules\Registry\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Add extends FormRequest
{
    public function rules()
    {
        return [
            'student_personal_name'         => 'sometimes',
            'student_personal_nisn'         => 'sometimes',
            'student_personal_npus'         => 'sometimes',
            'student_personal_nis'          => 'sometimes',
            'student_personal_nik'          => 'sometimes',
            'student_personal_gender'       => 'sometimes',
            'student_personal_birthplace'   => 'sometimes',
            'student_personal_birthday'     => 'sometimes',
            'student_personal_religion'     => 'sometimes',
            'student_personal_sibling'      => 'sometimes',
            
            'student_address_street'        => 'sometimes',
            'student_address_village'       => 'sometimes',
            'student_address_district'      => 'sometimes',
            'student_address_subdistrict'   => 'sometimes',
            'student_address_city'          => 'sometimes',
            'student_address_neighbourhood' => 'sometimes',
            'student_address_hamlet'        => 'sometimes',
            'student_address_phone'         => 'sometimes',
            'student_address_place'         => 'sometimes',
            'student_address_email'         => 'sometimes',
            
            'student_physic_height'         => 'nullable',
            'student_physic_weight'         => 'nullable',
            'student_physic_disability'     => 'nullable',
            
            'student_school_name'           => 'sometimes',
            'student_school_address'        => 'sometimes',
            'student_school_district'       => 'sometimes',
            'student_school_npsn'           => 'sometimes',
            
            'a_student_parent_name'         => 'sometimes',
            'a_student_parent_birthplace'   => 'sometimes',
            'a_student_parent_birthday'     => 'sometimes',
            'a_student_parent_job'          => 'sometimes',
            'a_student_parent_education'    => 'sometimes',
            'a_student_parent_income'       => 'sometimes',
            'a_student_parent_phone'        => 'sometimes',
            
            'i_student_parent_name'         => 'sometimes',
            'i_student_parent_birthplace'   => 'sometimes',
            'i_student_parent_birthday'     => 'sometimes',
            'i_student_parent_job'          => 'sometimes',
            'i_student_parent_education'    => 'sometimes',
            'i_student_parent_income'       => 'sometimes',
            'i_student_parent_phone'        => 'sometimes',
            
            'w_student_parent_name'         => 'nullable',
            'w_student_parent_birthplace'   => 'nullable',
            'w_student_parent_birthday'     => 'nullable',
            'w_student_parent_job'          => 'nullable',
            'w_student_parent_education'    => 'nullable',
            'w_student_parent_income'       => 'nullable',
            'w_student_parent_phone'        => 'nullable',
            
            'student_rapor_indonesia'       => 'sometimes',
            'student_uas_indonesia'         => 'sometimes',
            'student_uan_indonesia'         => 'sometimes',
            
            'student_rapor_inggris'         => 'sometimes',
            'student_uas_inggris'           => 'sometimes',
            'student_uan_inggris'           => 'sometimes',
            
            'student_rapor_mtk'             => 'sometimes',
            'student_uas_mtk'               => 'sometimes',
            'student_uan_mtk'               => 'sometimes',
            
            'student_rapor_ipa'             => 'sometimes',
            'student_uas_ipa'               => 'sometimes',
            'student_uan_ipa'               => 'sometimes',
            
            'registry_option1'              => 'sometimes',
            'registry_option2'              => 'sometimes',
            
            'un_student_upload_url'         => 'sometimes',
            'r_student_upload_url'          => 'sometimes',
            'uas_student_upload_url'        => 'sometimes'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
