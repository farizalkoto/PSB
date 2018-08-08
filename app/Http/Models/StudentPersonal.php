<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StudentPersonal extends Model
{
    protected $primaryKey = 'student_personal_id';

    protected $fillable = ['user_id', 'student_personal_name', 'student_personal_nisn', 'student_personal_npus', 'student_personal_nis', 'student_personal_nik', 'student_personal_gender', 'student_personal_birthplace', 'student_personal_birthday', 'student_personal_religion', 'student_personal_sibling', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function studentAddresses()
    {
        return $this->belongsTo(StudentAddress::class, 'student_personal_id', 'student_personal_id');
    }

    public function studentParents()
    {
        return $this->hasMany(StudentParent::class, 'student_personal_id', 'student_personal_id');
    }

    public function studentPhysics()
    {
        return $this->belongsTo(StudentPhysic::class, 'student_personal_id', 'student_personal_id');
    }

    public function studentSchools()
    {
        return $this->belongsTo(StudentSchool::class, 'student_personal_id', 'student_personal_id');
    }

    public function studentScores()
    {
        return $this->belongsTo(StudentScore::class, 'student_personal_id', 'student_personal_id');
    }

    public function studentUploads()
    {
        return $this->hasMany(StudentUpload::class, 'student_personal_id', 'student_personal_id');
    }
}
