<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantCollageCommitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_collage_commitments', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_sign')->nullable();
            $table->string('date_of_sign')->nullable();
            $table->string('stdname')->nullable();
            $table->string('stdnameB')->nullable();
            $table->string('mydocs')->nullable();
            $table->string('applicant_signB')->nullable();
            $table->string('date_of_signB')->nullable();
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
        Schema::dropIfExists('applicant_collage_commitments');
    }
}
