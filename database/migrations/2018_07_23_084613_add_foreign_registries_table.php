<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignRegistriesTable extends Migration
{

    public function __construct()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }

    public function up()
    {
        Schema::table('registries', function (Blueprint $table) {
            $table->unsignedInteger('registry_option1')->change();

            $table->foreign('registry_option1', 'registry_option1_departments_idx')
            ->references('department_id')->on('departments')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedInteger('registry_option2')->change();

            $table->foreign('registry_option2', 'registry_option2_departments_idx')
            ->references('department_id')->on('departments')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('registries', function (Blueprint $table) {
            $table->dropForeign('registry_option2_departments_idx');
            $table->dropIndex('registry_option2_departments_idx');
            $table->dropColumn('registry_option2');

            $table->dropForeign('registry_option1_departments_idx');
            $table->dropIndex('registry_option1_departments_idx');
            $table->dropColumn('registry_option1');
        });

        Schema::table('registries', function (Blueprint $table) {
            $table->string('registry_option2')->after('user_id');
            $table->string('registry_option1')->after('user_id');
        });
    }
}
