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
            $table->string('ielts_issue_date')->nullable();
            $table->string('ielts_ukvi_issue_date')->nullable();
            $table->string('tofel_issue_date')->nullable();
            $table->string('sat_issue_date')->nullable();
            $table->string('pte_issue_date')->nullable();
            $table->string('gre_issue_date')->nullable();
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
