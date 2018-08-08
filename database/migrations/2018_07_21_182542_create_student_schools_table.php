<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSchoolsTable extends Migration
{
    public function up()
    {
        Schema::create('student_schools', function (Blueprint $table) {
            $table->increments('student_school_id');
            $table->unsignedInteger('student_personal_id');
            $table->string('student_school_name');
            $table->string('student_school_address')->nullable();
            $table->string('student_school_district')->nullable();
            $table->string('student_school_npsn')->nullable();
            $table->timestamps();

            $table->foreign('student_personal_id', 'student_personals_student_schools_idx')
            ->references('student_personal_id')->on('student_personals')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_schools');
    }
}
