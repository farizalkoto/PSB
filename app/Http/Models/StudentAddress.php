<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    protected $primaryKey = 'student_address_id';

    protected $fillable = ['student_personal_id', 'student_address_street', 'student_address_village', 'student_address_district', 'student_address_subdistrict', 'student_address_city', 'student_address_neighbourhood', 'student_address_hamlet', 'student_address_phone', 'student_address_place', 'student_address_email', 'created_at', 'updated_at'];

    public function studentPersonal()
    {
        return $this->belongsTo(StudentPersonal::class, 'student_personal_id', 'student_personal_id');
    }
}
