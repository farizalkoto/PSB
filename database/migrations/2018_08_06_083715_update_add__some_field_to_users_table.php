<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAddSomeFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('user_verified');
            $table->string('email')->nullable()->after('user_verified');
            $table->date('tanggal_lahir')->nullable()->after('user_verified');
            $table->string('tempat_lahir')->nullable()->after('user_verified');
            $table->string('alamat')->nullable()->after('user_verified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('email');
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('tempat_lahir');
            $table->dropColumn('alamat');
        });
    }
}
