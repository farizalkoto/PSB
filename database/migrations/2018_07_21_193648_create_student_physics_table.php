<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentPhysicsTable extends Migration
{
    public function __construct()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
    
    public function up()
    {
        Schema::create('student_physics', function (Blueprint $table) {
            $table->increments('student_physic_id');
            $table->unsignedInteger('student_personal_id');
            $table->string('student_physic_height')->nullable();
            $table->string('student_physic_weight')->nullable();
            $table->enum('student_physic_disability', [0, 1])->default(0);
            $table->timestamps();

            $table->foreign('student_personal_id', 'student_personals_student_physics_idx')
            ->references('student_personal_id')->on('student_personals')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_physics');
    }
}
