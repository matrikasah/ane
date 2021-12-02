<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_education', function (Blueprint $table) {
            $table->id();
            $table->string('higher_edu')->nullable();
            $table->string('yearCompletion')->nullable();
            $table->string('secondary')->nullable();
            $table->string('prevquali')->nullable();
            $table->string('employment')->nullable();
            $table->bigInteger('ieltsscr')->nullable();
            $table->bigInteger('ptescr')->nullable();
            $table->bigInteger('toeflscr')->nullable();
            $table->string('ieltsyear')->nullable();
            $table->string('pteyear')->nullable();
            $table->string('tofelyear')->nullable();
            $table->string('otheryear')->nullable();
            $table->string('proghistory')->nullable();
            $table->string('priorlearn')->nullable();


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
        Schema::dropIfExists('applicant_education');
    }
}
