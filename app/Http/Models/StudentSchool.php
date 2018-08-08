<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSchool extends Model
{
    protected $primaryKey = 'student_school_id';

    protected $fillable = ['student_personal_id', 'student_school_name', 'student_school_address', 'student_school_district', 'student_school_npsn', 'created_at', 'updated_at'];

    public function studentPersonal()
    {
        return $this->belongsTo(StudentPersonal::class, 'student_personal_id', 'student_personal_id');
    }
}
