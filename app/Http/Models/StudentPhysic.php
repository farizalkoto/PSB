<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StudentPhysic extends Model
{
    protected $primaryKey = 'student_physic_id';

    protected $fillable = ['student_personal_id', 'student_physic_height', 'student_physic_weight', 'student_physic_disability', 'created_at', 'updated_at'];

    public function studentPersonal()
    {
        return $this->belongsTo(StudentPersonal::class, 'student_personal_id', 'student_personal_id');
    }
}
