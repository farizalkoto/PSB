<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentParentsTable extends Migration
{
    public function __construct()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
    
    public function up()
    {
        Schema::create('student_parents', function (Blueprint $table) {
            $table->increments('student_parent_id');
            $table->unsignedInteger('student_personal_id');
            $table->string('student_parent_name')->nullable();
            $table->string('student_parent_birthplace')->nullable();
            $table->string('student_parent_job')->nullable();
            $table->string('student_parent_education')->nullable();
            $table->string('student_parent_income')->nullable();
            $table->string('student_parent_phone')->nullable();
            $table->enum('student_parent_type', ['father', 'mother', 'alternate'])->nullable();
            $table->timestamps();

            $table->foreign('student_personal_id', 'student_personals_student_parents_idx')
            ->references('student_personal_id')->on('student_personals')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_parents');
    }
}
