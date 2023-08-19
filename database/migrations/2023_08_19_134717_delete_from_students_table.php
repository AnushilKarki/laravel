<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('ielts_issue_date');
            $table->dropColumn('ielts_ukvi_issue_date');
            $table->dropColumn('tofel_issue_date');
            $table->dropColumn('sat_issue_date');
            $table->dropColumn('pte_issue_date');
            $table->dropColumn('gre_issue_date');

            $table->dropColumn('ielts_notlessthen');
            $table->dropColumn('ielts_ukvi_notlessthen');
            $table->dropColumn('tofel_notlessthen');
            $table->dropColumn('sat_notlessthen');
            $table->dropColumn('pte_notlessthen');
            $table->dropColumn('gre_notlessthen');

            $table->dropColumn('ielts');
            $table->dropColumn('ielts_ukvi');
            $table->dropColumn('tofel');
            $table->dropColumn('sat');
            $table->dropColumn('pte');
            $table->dropColumn('gre');
            // $table->dropCOlumn('callstatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
