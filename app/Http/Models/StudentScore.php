<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StudentScore extends Model
{
    protected $primaryKey = 'student_score_id';

    protected $fillable = ['student_personal_id', 'student_rapor_indonesia',
'student_rapor_inggris',
'student_rapor_ipa',
'student_rapor_mtk',
'student_uan_indonesia',
'student_uan_inggris',
'student_uan_ipa',
'student_uan_mtk',
'student_uas_indonesia',
'student_uas_inggris',
'student_uas_ipa',
'student_uas_mtk', 'student_score_indonesia', 'student_score_mtk', 'student_score_ipa', 'student_score_inggris', 'created_at', 'updated_at'];

    public function studentPersonal()
    {
        return $this->belongsTo(StudentPersonal::class, 'student_personal_id', 'student_personal_id');
    }
}
