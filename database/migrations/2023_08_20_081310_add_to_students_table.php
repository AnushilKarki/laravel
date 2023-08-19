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
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('slcboard')->nullable();
            $table->string('slcstream')->nullable();
            $table->string('plus2board')->nullable();
            $table->string('plus2stream')->nullable();
            $table->string('bachelorboard')->nullable();
            $table->string('bachelorstream')->nullable();
            $table->string('masterboard')->nullable();
            $table->string('masterstream')->nullable();
            $table->String('intake')->nullable();
 
            $table->string('interestcityremark')->nullable();
            $table->string('gap')->nullable();
            $table->String('test_issue_date')->nullable();
            $table->String('test_score_notlessthen')->nullable();
            $table->string('work_description')->nullable();
            $table->string('work_duration')->nullable();
            $table->string('visa_rejection_detail')->nullable();
            $table->String('profile_picture')->nullable();
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
