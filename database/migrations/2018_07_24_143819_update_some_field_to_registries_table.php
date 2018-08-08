<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSomeFieldToRegistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registries', function (Blueprint $table) {
            $table->integer('registry_score_total')->after('registry_option2');
            $table->enum('registry_verified', [0, 1])->after('registry_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registries', function (Blueprint $table) {
            $table->dropColumn('registry_score_total');
            $table->dropColumn('registry_verified');
        });
    }
}
