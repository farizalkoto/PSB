<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSomeFieldToStudentScoresTable extends Migration
{
    public function up()
    {
        Schema::table('student_scores', function (Blueprint $table) {

            $table->string('student_uas_indonesia')->after('student_score_inggris');
            $table->string('student_uan_indonesia')->after('student_uas_indonesia');
            $table->string('student_rapor_indonesia')->after('student_uan_indonesia');

            $table->string('student_uas_mtk')->after('student_rapor_indonesia');
            $table->string('student_uan_mtk')->after('student_uas_mtk');
            $table->string('student_rapor_mtk')->after('student_uan_mtk');

            $table->string('student_uas_ipa')->after('student_rapor_mtk');
            $table->string('student_uan_ipa')->after('student_uas_ipa');
            $table->string('student_rapor_ipa')->after('student_uan_ipa');

            $table->string('student_uas_inggris')->after('student_rapor_ipa');
            $table->string('student_uan_inggris')->after('student_uas_inggris');
            $table->string('student_rapor_inggris')->after('student_uan_inggris');
        });
    }

    public function down()
    {
        Schema::table('student_scores', function (Blueprint $table) {
            $table->string('student_score_bi')->after('student_personal_id');
            $table->dropColumn('student_uas_indonesia');
            $table->dropColumn('student_uan_indonesia');
            $table->dropColumn('student_rapor_indonesia');

            $table->dropColumn('student_uas_mtk');
            $table->dropColumn('student_uan_mtk');
            $table->dropColumn('student_rapor_mtk');

            $table->dropColumn('student_uas_ipa');
            $table->dropColumn('student_uan_ipa');
            $table->dropColumn('student_rapor_ipa');

            $table->dropColumn('student_uas_inggris');
            $table->dropColumn('student_uan_inggris');
            $table->dropColumn('student_rapor_inggris');
        });
    }
}
