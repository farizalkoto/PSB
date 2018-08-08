<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRegistriesTableDateAdd extends Migration
{
    public function up()
    {
        Schema::table('registries', function (Blueprint $table) {
            $table->dateTime('registry_date')->after('registry_status');
        });
    }

    public function down()
    {
        Schema::table('registries', function (Blueprint $table) {
            $table->dropColumn('registry_date');
        });
    }
}
