<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalStudentsTable extends Migration
{
    public function __construct()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
    
    public function up()
    {
        Schema::create('student_personals', function (Blueprint $table) {
            $table->increments('student_personal_id');
            $table->unsignedInteger('user_id');
            $table->string('student_personal_name');
            $table->string('student_personal_nisn');
            $table->string('student_personal_npus');
            $table->string('student_personal_nis');
            $table->string('student_personal_nik');
            $table->enum('student_personal_gender', ['male', 'female']);
            $table->string('student_personal_birthplace');
            $table->date('student_personal_birthday');
            $table->enum('student_personal_religion', ['islam', 'katolik', 'protestan', 'hindu', 'budha', 'konghucu']);
            $table->integer('student_personal_sibling');
            $table->timestamps();

            $table->foreign('user_id', 'student_personals_users_idx')
            ->references('user_id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_personals');
    }
}
