<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('student_addresses', function (Blueprint $table) {
            $table->increments('student_address_id');
            $table->unsignedInteger('student_personal_id');
            $table->string('student_address_street')->nullable();
            $table->string('student_address_village')->nullable();
            $table->string('student_address_district')->nullable();
            $table->string('student_address_subdistrict')->nullable();
            $table->string('student_address_city')->nullable();
            $table->string('student_address_neighbourhood')->nullable();
            $table->string('student_address_hamlet')->nullable();
            $table->string('student_address_phone');
            $table->timestamps();

            $table->foreign('student_personal_id', 'student_personals_student_addresses_idx')
            ->references('student_personal_id')->on('student_personals')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_addresses');
    }
}
