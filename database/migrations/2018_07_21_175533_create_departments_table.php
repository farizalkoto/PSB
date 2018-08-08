<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('department_id');
            $table->string('department_tag')->unique();
            $table->string('department_name');
            $table->string('department_max');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
