<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentUploadsTable extends Migration
{
    public function up()
    {
        Schema::create('student_uploads', function (Blueprint $table) {
            $table->increments('student_upload_id');
            $table->unsignedInteger('student_personal_id');
            $table->string('student_upload_name');
            $table->string('student_upload_url');
            $table->timestamps();

            $table->foreign('student_personal_id', 'student_personals_student_uploads_idx')
            ->references('student_personal_id')->on('student_personals')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_uploads');
    }
}
