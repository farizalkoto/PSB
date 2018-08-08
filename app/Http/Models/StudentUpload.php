<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StudentUpload extends Model
{
    protected $primaryKey = 'student_upload_id';

    protected $fillable = ['student_personal_id', 'student_upload_name', 'student_upload_url', 'created_at', 'updated_at'];

    public function studentPersonal()
    {
        return $this->belongsTo(StudentPersonal::class, 'student_personal_id', 'student_personal_id');
    }
}
