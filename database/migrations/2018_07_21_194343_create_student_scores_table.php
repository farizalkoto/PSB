<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentScoresTable extends Migration
{
    public function up()
    {
        Schema::create('student_scores', function (Blueprint $table) {
            $table->increments('student_score_id');
            $table->unsignedInteger('student_personal_id');
            $table->enum('student_score_category',['uas','un','raport']);
            $table->string('student_score_indonesia');
            $table->string('student_score_mtk');
            $table->string('student_score_ipa');
            $table->string('student_score_inggris');
            $table->timestamps();

            $table->foreign('student_personal_id', 'student_personals_student_scores_idx')
            ->references('student_personal_id')->on('student_personals')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_scores');
    }
}
