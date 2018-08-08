<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStudentAddressesTable extends Migration
{
    public function up()
    {
        Schema::table('student_addresses', function (Blueprint $table) {
            $table->string('student_address_place')->nullable()->after('student_address_phone');
            $table->string('student_address_email')->nullable()->after('student_address_place');
        });
    }

    public function down()
    {
        Schema::table('student_addresses', function (Blueprint $table) {
            $table->dropColumn('student_address_place');
            $table->dropColumn('student_address_email');
        });
    }
}
