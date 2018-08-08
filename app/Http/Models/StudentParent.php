<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    protected $primaryKey = 'student_parent_id';

    protected $fillable = ['student_personal_id', 'student_parent_name', 'student_parent_birthplace', 'student_parent_job', 'student_parent_education', 'student_parent_income', 'student_parent_phone', 'student_parent_type', 'created_at', 'updated_at'];

    public function studentPersonal()
    {
        return $this->belongsTo(StudentPersonal::class, 'student_personal_id', 'student_personal_id');
    }
}
