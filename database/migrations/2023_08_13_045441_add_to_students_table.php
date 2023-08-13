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
            $table->string('master_score')->nullable();
            $table->string('bachelor_score')->nullable();
            $table->string('plus2_score')->nullable();
            $table->string('slc_score')->nullable();
            $table->string('master_passoutyear')->nullable();
            $table->string('bachelor_passoutyear')->nullable();
            $table->string('plus2_passoutyear')->nullable();
            $table->string('slc_passoutyear')->nullable();
            $table->string('ielts_notlessthen')->nullable();
            $table->string('ielts_ukvi_notlessthen')->nullable();
            $table->string('tofel_notlessthen')->nullable();
            $table->string('sat_notlessthen')->nullable();
            $table->string('pte_notlessthen')->nullable();
            $table->string('gre_notlessthen')->nullable();
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
