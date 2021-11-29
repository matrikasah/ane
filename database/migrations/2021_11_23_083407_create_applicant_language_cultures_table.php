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
            $table->string('langbirthCoun')->nullable();
            $table->string('ausCtzen')->nullable();
            $table->string('ausAbor')->nullable();
            $table->string('onlyAbor')->nullable();
            $table->string('onlyTorres')->nullable();
            $table->string('englanguage')->nullable();
            $table->string('otherlanguages')->nullable();
            $table->bigInteger('applicant_id')->nullable();

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
