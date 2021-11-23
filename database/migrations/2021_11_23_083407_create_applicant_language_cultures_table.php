<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantLanguageCulturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_language_cultures', function (Blueprint $table) {
            $table->id();
            $table->string('langbirthCoun');
            $table->string('ausCtzen');
            $table->string('ausAbor');
            $table->string('onlyAbor');
            $table->string('onlyTorres');
            $table->string('englanguage');
            $table->string('otherlanguages');
            $table->bigInteger('applicant_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant_language_cultures');
    }
}
