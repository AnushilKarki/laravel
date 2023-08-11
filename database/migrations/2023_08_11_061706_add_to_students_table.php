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
            $table->date('dob')->nullable();
            $table->string('master')->nullable();
            $table->string('bachelor')->nullable();
            $table->string('plus2')->nullable();
            $table->string('slc')->nullable();
            $table->string('major_subject')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('ielts')->nullable();
            //ielts has overall and not less then score
            $table->string('ielts_ukvi')->nullable();
            $table->string('tofel')->nullable();
            $table->string('sat')->nullable();
            $table->string('pte')->nullable();
            $table->string('gre')->nullable();
            $table->string('extra')->nullable();
            $table->string('counseled_by')->nullable();
            $table->string('studentid')->nullable();
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
