<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSomeTableToRegistriesTable extends Migration
{
    public function up()
    {
        Schema::table('registries', function (Blueprint $table) {
            $table->dropColumn('registry_verified');
        });

        Schema::table('registries', function (Blueprint $table) {
            $table->enum('registry_verified', [0,1])->after('registry_date')->nullable()->default(0);
        });
    }

    public function down()
    {
        Schema::table('registries', function (Blueprint $table) {
            $table->dropColumn('registry_verified');
        });

        Schema::table('registries', function (Blueprint $table) {
            $table->enum('registry_verified', [0,1])->after('registry_date');
        });
    }
}
