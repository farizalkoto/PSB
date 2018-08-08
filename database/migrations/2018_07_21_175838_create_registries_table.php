<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistriesTable extends Migration
{
    public function __construct()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
    
    public function up()
    {
        Schema::create('registries', function (Blueprint $table) {
            $table->increments('registry_id');
            $table->unsignedInteger('user_id');
            $table->string('registry_option1');
            $table->string('registry_option2');
            $table->enum('registry_status', ['registry_option1', 'registry_option2', 'not_pass']);
            $table->timestamps();

            $table->foreign('user_id', 'registry_users_idx')
            ->references('user_id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('registries');
    }
}
